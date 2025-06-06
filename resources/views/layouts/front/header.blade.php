<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $footerDetails->company_name ?? '' }}</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @if (isset($faviconDetails) && (filled($faviconDetails->favicon)))
    <link rel="shortcut icon" href="{{ asset('storage/webiste_setting/'.$faviconDetails->favicon) }}" type="image/x-icon">
    @endif
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style-starter.css')}}">
</head>
<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    @if(isset($faviconDetails) && (filled($faviconDetails->logo)))
                        <img src="{{ asset('storage/webiste_setting/'.$faviconDetails->logo) }}" alt="" style="width:146px;height:48px;">
                    @else
                        <i class="fab fa-wikipedia-w"></i>orkup
                    @endif
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link @if(request()->segment(1)=='home') active @endif"  aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->segment(1)=='about') active @endif" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item @if(request()->segment(1)=='service') active @endif">
                            <a class="nav-link" href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="nav-item @if(request()->segment(1)=='contact.us') active @endif">
                            <a class="nav-link" href="{{ route('contact.us') }}">Contact</a>
                        </li>
                        <li class="nav-item @if(request()->segment(1)=='login') active @endif">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                    <form action="#search" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->