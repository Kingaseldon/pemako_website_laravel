<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;700&display=swap">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- <link rel="stylesheet" href="../css/style.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <!-- Booking -->
    <link href=https://live.ipms247.com/themes/reservation/css/bookingbtn/resui_bookingbox.css rel="stylesheet" type="text/css" />
    <link href=https://live.ipms247.com/themes/reservation/css/bookingbtn/resui_datepicker.css rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <title>Pemako Thimphu</title>
</head>

<body>

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <div class="logo-wrapper">
                <a class="logo" href="/"> <img src="/assets/img/logo_bw.jpg" class="logo-img" alt>
                </a>
            </div>
            <div>
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span id="toggle-btn"></span>
                    </label>
                    <ul class="menu__box">
                        <img src="/assets/img/flower.png" style="width: 15%;" />
                        <li><a class="menu__item" href="/">Home</a></li>
                        <li><a class="menu__item" href="{{route('accommodation.index')}}">Accomodation</a></li>
                        <li><a class="menu__item" href="{{route('thimphudining.index')}}">Dining</a></li>
                        <li><a class="menu__item" href="#wellness">Wellness</a></li>
                        <li><a class="menu__item" href="/thimphu/events.html">Events</a></li>
                        <li><a class="menu__item" href="/thimphu/experiences.html">Experiences</a></li>
                        <li><a class="menu__item" href="{{ route('thimphugallery.index') }}">Gallery</a></li>
                        <li><a class="menu__item1" href="../punakha/">Pemako Punakha</a></li>
                        <hr class="hr-text" data-content>
                        <div class="nav-social-link">
                            <a href="https://www.instagram.com/p/Ct34mBppQgq/?utm_source=ig_web_button_share_sheet&igshid=MjAxZDBhZDhlNA==" target="_blank" rel="noopener noreferrer"><i class="ti-instagram"></i></a>
                            <a href="https://twitter.com/Pemako1" target="_blank" rel="noopener noreferrer"><i class="ti-twitter"></i></a>
                            <a href="https://www.facebook.com/pemako.bhutan.7/" target="_blank" rel="noopener noreferrer"><i class="ti-facebook"></i></a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>