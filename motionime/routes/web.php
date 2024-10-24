<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\GoogleController;
use App\Models\User;
use App\Services\MyService;

Route::get('/example', function (MyService $service) {
    return $service->doSomething();
});

Route::get('/', function () {
    return view('frontpage');
})->name('frontpage');

Route::get('/firstchapterevent', function () {
    return view('firstchapterpage');
})->name('first-chapter');

Route::get('/loginuser', function () {
    return view('loginpage');
})->name('loginpage');

// Route untuk mengarahkan ke Google untuk login
Route::get('/auth/google', function () {
    \Log::info('Redirecting to Google...');
    return Socialite::driver('google')
        ->scopes(['openid', 'email', 'profile'])
        ->redirect();
})->name('auth.google');

// Route callback setelah login dengan Google
Route::get('http://localhost:8000', function () {
    try {
        $googleUser = Socialite::driver('google')->stateless()->user();

        \Log::info('Google User Data: ', (array) $googleUser); // Menambahkan logging

        if (!$googleUser) {
            return redirect()->route('loginpage')->with('error', 'Login failed. Please try again.');
        }

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            ['name' => $googleUser->getName(), 'google_id' => $googleUser->getId()]
        );

        Auth::login($user);
        return redirect()->route('frontpage');
    } catch (\Exception $e) {
        \Log::error('Google login error: ' . $e->getMessage());
        return redirect()->route('loginpage')->with('error', 'An error occurred. Please try again.');
    }
})->name('auth.google.callback');
