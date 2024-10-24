<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion Ime - First Chapter</title>
    <link rel="stylesheet" href="{{ asset('css/firstchapter.css') }}">
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
                <a href="/signin" class="buttonsignin">Sign in</a>
            </li>
        </ul>
    </nav>
    <div class="ourevent">
        <div class="imageourevent">
            <img src="{{ asset('image/imageourevent.png') }}" alt="imageourevent">
            <img class="imageoureventdup" src="{{ asset('image/imageourevent.png') }}" alt="imageourevent" style="width: auto;
    height: auto; filter: saturate(150%); box-shadow: 2px 2px 15px 2px black; border-radius: 20px;">
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
        <div class="firstchapterheader">
            <div class="firstchapterheaderslide">
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
            </div>
            <div class="firstchapterheaderslide">
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
            </div>
            <div class="firstchapterheaderslide">
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
                <span class="slide-text"
                    style="font-family:'montserrat'; font-size: 20px; display: inline-block; padding: 0 20px;">SOME
                    HIGHLIGHT OF THE FIRST CHAPTER
                </span>
            </div>
        </div>
        <div class="firstmotiondocumentary">
            <div class="firstmotiondocumentaryalbum"
                style="display:inline-block; justify-content:center; align-items: center;">
                <img src="{{ asset('image/motiondocumentary.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary2.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary3.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary4.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary5.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary6.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary7.png') }}" alt="firstmotiondocumentaryalbum">
            </div>
            <div class="firstmotiondocumentaryalbum"
                style="display:inline-block; justify-content:center; align-items: center;">
                <img src="{{ asset('image/motiondocumentary.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary2.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary3.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary4.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary5.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary6.png') }}" alt="firstmotiondocumentaryalbum">
                <img src="{{ asset('image/motiondocumentary7.png') }}" alt="firstmotiondocumentaryalbum">
            </div>
        </div>
        <button id="playPauseButton" onclick="togglePlayPause()">
            <!-- Icon Play (Hidden by default) -->
            <svg id="playIcon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                style="display: none;">
                <polygon points="5,3 19,12 5,21" fill="black" />
            </svg>
            <!-- Icon Pause (Visible by default) -->
            <svg id="pauseIcon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="3" width="4" height="18" fill="black" />
                <rect x="15" y="3" width="4" height="18" fill="black" />
            </svg>
        </button>
        <div class="aboutfirstchapter">
            <div class="aboutfirstchapterimage">
                <img src="{{ asset('image/aboutfirstchapter.png') }}" alt="aboutfirstchapterimage">
            </div>
            <div class="teksfirstchapter" style="display: inline-blok">
                <h1 class="aboutfirstchapterheader"
                    style="font-size: 34px; font-family: '911 porscha'; text-align: center; position: relative;">
                    First Chapter</h1>
                <h1 class="aboutfirstchapterdescription"
                    style="font-size: 20px; font-family: 'montserrat'; font-weight: lighter;">The "Motion
                    Ime
                    First Chapter" event took place in Jakarta on December 2, 2023, and it was nothing short of
                    spectacular.
                    The event was attended by a large number of people, showcasing the immense interest and enthusiasm
                    surrounding this unique gathering.<br><br>The event was filled with many exciting moments, making it
                    an unforgettable experience for all attendees. One of the most memorable highlights was the series
                    of stunning performances by well-known artists, including popular groups like JKT48, who captivated
                    the audience with their lively shows.<br><br>Additionally, there was an incredible turnout of
                    cosplayers, who brought their favorite characters to life with vibrant costumes and captivating
                    performances. The energy and passion of the cosplayers added a colorful and dynamic atmosphere to
                    the event, further enhancing the excitement.</h1>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>