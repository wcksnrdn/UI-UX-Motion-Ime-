<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion Ime</title>
    <link rel="stylesheet" href="{{ asset('css/frontpage.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat:wght@400;700&display=swap">
    <link href="https://fonts.cdnfonts.com/css/911-porscha" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('js/frontpage.js') }}"></script>
</head>

<body>
    <nav>
        <ul>
            <li class="brand">
                <a href="{{ route('frontpage') }}" class="brand">Motion Ime</a>
            </li>
            <li class="events-link" style="z-index: 100;">
                <a style="cursor: pointer;">Our Events</a>
                <div class="navigationsuggestionourevent">
                    <a href="{{ route('first-chapter') }}" class="navigationsuggestionoureventheader">
                        First Chapter
                    </a>
                    <h1 class="navigationsuggestionoureventheader2">
                        Second Chapter --- Coming Soon
                    </h1>
                </div>
            </li>
            <li class="nav-links">
                <a href="/">Ticket</a>
            </li>
            <li class="nav-links">
                <a href="/">Contact Us</a>
            </li>
            <li class="nav-buttons">
                <a href="{{ route('loginpage') }}" class="buttonsignin" style="text-decoration: none;">Sign in</a>
                <a href="/signup" class="buttonsignup" style="text-decoration: none;">Sign Up</a>
            </li>
        </ul>
    </nav>
    <div class="bgphoto">
        <h1 class="headermotionutama">Motion Ime</h1>
        <img src="{{ asset('image/motionimeutama.jpg') }}" alt="Example Image">
    </div>
    <div class="about">
        <h1 class="headerabout">Motion Ime</h1>
        <div class="imgabout">
            <div class="imgutamaabout">
                <img src="{{ asset('image/motionutamaabout.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout2.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout3.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout4.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout5.png') }}" alt="motionutamaabout">
            </div>
            <div class="imgutamaabout">
                <img src="{{ asset('image/motionutamaabout.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout2.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout3.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout4.png') }}" alt="motionutamaabout">
                <img src="{{ asset('image/motionutamaabout5.png') }}" alt="motionutamaabout">
            </div>
        </div>
        <h1 class="headerabout2">What is Motion Ime<span style="font-family: 'Montserrat';">?</span></h1>
        <div class="descriptionabout">
            <div class="headerabout2image">
                <img src="{{ asset('Image/headerabout2image.png') }}" alt="headerabout2image">
            </div>
            <p><span style="font-size: 80px; font-family: 'dancing Script';">Motion Ime</span><br>Discord community
                founded in 2023 by Windah Basudara and Rio Djaja. This
                community is one of the largest in Indonesia with a fairly large number of members. Motionime focuses on
                various online community activities, such as gaming, watch parties, virtual concerts, creative
                discussions, and various other interesting activities.<br><br>This community is known as "Bocil
                Kematian" for
                its members, and offers various exciting activities ranging from gaming parties, watching anime
                together, concerts, to creative sessions such as photography, videography and cosplay. Motionime also
                holds various events, including social events such as the "Motion Ime Festival" to celebrate the
                achievements of their community and help charities.</p>
        </div>
    </div>
    <div class="ourevent">
        <h1 class="headerourevent"
            style="font-size: 34px; font-family: '911 porscha'; text-align: center; margin-top: 50px;">Our Events
        </h1>
        <div class="imageourevent">
            <img src="{{ asset('image/imageourevent.png') }}" alt="imageourevent">
            <img class="imageoureventdup" src="{{ asset('image/imageourevent.png') }}" alt="imageourevent" style="width: auto;
    height: auto; filter: saturate(150%); box-shadow: 2px 2px 15px 2px black; border-radius: 20px;">
        </div>
        <div class="descriptionourevent">
            <h1 class="headerdescriptionourevents"
                style="font-size: 34px; font-family: '911 porscha'; text-align: center;">These Are The Events We Have
                Held</h1>
        </div>
        <div class="chapteroneheader"
            style="font-family:'911 porscha'; font-size: 34px; text-align: center; position:relative; margin-top: 30px; bottom: -20px;">
            First
            Chapter</div>
        <div class="garis"></div>
        <div class="firstyearevent"
            style="font-size: 20px; font-family: '911 porscha'; position:absolute; left: 530px; margin-top:-13px;">2023
        </div>
        <div class="portalkiri"></div>
        <div class="portalkanan"></div>
        <div class="firstyeareventimage">
            <div class="firstyeareventimageswipe">
                <img src="{{ asset('image/firstyearevent3.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent2.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent1.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent3.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent4.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent5.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent6.png') }}" alt="firstyeareventimage">
                <img src="{{ asset('image/firstyearevent7.png') }}" alt="firstyeareventimage">
            </div>
        </div>
        <a href="{{ route('first-chapter') }}" class="btn-more-info">
            <span class="text" style="font-family: 'montserrat';">See More</span>
        </a>
        <div class="chaptertwo">
            <h1 class="chaptertwoheader"
                style="text-align: center; font-family: '911 porscha'; font-size: 34px; margin-top:50px; font-weight: lighter;">
                Second
                Chapter</h1>
        </div>
        <div class="garis2"></div>
        <div class="secondyearevent"
            style="font-size: 20px; font-family: '911 porscha'; position:absolute; left: 530px; margin-top:-13px;">2024
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>