<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion Ime - Sign in</title>
    <link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat:wght@400;700&display=swap">
    <link href="https://fonts.cdnfonts.com/css/911-porscha" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="containerlogin">
        <img src="{{ asset('image/imageourevent.png') }}" class="motionimeutama" alt="motionimeutama">
        <h1 class="containerheader" style="font-family: 'Montserrat'; text-align:center;">Welcome Back</h1>
        <div class="textboxlogin-container">
            <input type="email" id="email" class="textboxlogin" required>
            <label for="email" class="textboxlogin-label">Email address*</label>
        </div>
        <button type="submit" class="submitbutton" alt="submitbutton">Continue</button>

        <div class="garis"></div>
        <div class="or">Or</div>
        <a href="{{ route('auth.google') }}">
            <button class="googlebutton">
                <img src="https://img.icons8.com/color/16/000000/google-logo.png" alt="Google logo">
                Sign In with Google
            </button>
        </a>
    </div>
</body>

</html>