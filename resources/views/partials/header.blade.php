<!DOCTYPE html>
<html lang="en">
{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ospree Duty Free')</title>

    <!-- Example CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preload" href="{{ URL::asset('/public/assets/css/stylesheet.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <script type="text/javascript" src="{{ URL::asset('/public/assets/js/script.js')}}" defer></script>

    <!-- Example meta tags -->
    <meta name="description" content="@yield('meta_description', 'Ospree Duty Free - Your trusted shopping destination.')">
</head> --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ URL::asset('/public/assets/images/fav.svg') }}">
    <title>@yield('title', 'Ospree Duty Free')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="preload" href="{{ URL::asset('/public/assets/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ URL::asset('/public/assets/css/bootstrap.min.css') }}">
    </noscript>
    <link rel="stylesheet" href="{{ URL::asset('/public/assets/css/lightgalleryonline.css') }}">
    <link rel="preload" href="{{ URL::asset('/public/assets/css/slick.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ URL::asset('/public/assets/css/slick.css') }}">
    </noscript>
    <link rel="preload" href="{{ URL::asset('/public/assets/css/styles.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ URL::asset('/public/assets/css/styles.min.css') }}">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="{{ URL::asset('/public/assets/css/stylesheet.min.css') }}">
    </noscript>
    <link rel="preload" href="{{ URL::asset('/public/assets/css/stylesheet.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <script type="text/javascript" src="{{ URL::asset('/public/assets/js/jquery-3.6.0.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('/public/assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('/public/assets/js/slick.min.js') }}" defer></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"
        integrity="sha384-OgYwZnqdr0x0u063dKGn05SO0TiNaQyx8KNthUkR9sHyxvhqWj0Ypw0Y2E+t7YsL" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ URL::asset('/public/assets/js/script.js') }}" defer></script>

</head>

<body>
    <header class="main-header">
        <div class="headerTop d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-12 col-lg-12">
                        <div class="headTopContact justify-content-end d-flex align-items-center">
                            <span class="d-flex align-items-center me-2">
                                <img src="{{ URL::asset('/public/assets/images/icon-call.svg') }}" width="18"
                                    alt="Call Icon">
                            </span>
                            <a class="iconWrapper d-inline-flex align-items-center" href="tel:1800 270 6337">
                                <span>1800 270 6337</span>
                            </a>
                            <span class="mx-3">|</span>
                            <span class="d-flex align-items-center me-2">
                                <img src="{{ URL::asset('/public/assets/images/icon-mail.svg') }}" width="18"
                                    alt="Mail Icon">
                            </span>
                            <a class="iconWrapper d-inline-flex align-items-center"
                                href="mailto:india.customerservice-ospree@adani.com">
                                <span>india.customerservice-ospree@adani.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="container">
                <nav class="navbar navbarCustom navbar-expand-lg">
                    <a href="#" class="navbar-brand">

                        <img src="{{ URL::asset('/public/assets/images/Group-19433.svg') }}" alt="Logo"
                            class="img-fluid">

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-ham-icon"></span>
                        <span class="navbar-ham-icon"></span>
                        <span class="navbar-ham-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbarCustomCollapse justify-content-end"
                        id="navbarSupportedContent">
                        <div class="mainMenu d-lg-flex align-items-center">
                            <ul id="menu-header-menu" class="hmenu d-lg-flex">
                                <li id="menu-item-562"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-562">
                                    <a href="#">About us</a>
                                    <button class="sub-menu-toggle lazyloaded"></button>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}#vision">Our Vision</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}#member_1">Board of Directors</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}#member_2">Our Management</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}#principles">Our Principles</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}#sustainability">Sustainability</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}#csr">CSR</a>
                                        </li>
                                    </ul>

                                </li>
                                <li id="menu-item-18"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18">
                                    <a href="#">For Traveler</a>
                                    <button class="sub-menu-toggle"></button>
                                    <ul class="sub-menu">
                                        <li id="menu-item-560"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-560">
                                            <a href="{{ route('discover-unique-exp') }}">Discover
                                                Unique Experience</a>
                                        </li>
                                        <li id="menu-item-561"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-561">
                                            <a href="{{ route('white-glove-service') }}">White Glove
                                                Service</a>
                                        </li>
                                        <li id="menu-item-1031"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1031">
                                            <a
                                                href="https://www.ospreedutyfree.com/offer-category/bank-offers/">Offers</a>
                                        </li>
                                        <li id="menu-item-1122"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1122">
                                            <a href="https://www.ospreedutyfree.com/frequently-asked-questions/">Baggage
                                                Allowance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-367"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-367">
                                    <a href="https://www.ospreedutyfree.com/our-location/">Our Location</a>
                                </li>
                                <li id="menu-item-368"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-368">
                                    <a href="https://www.ospreedutyfree.com/career/">Career</a>
                                </li>
                                <li id="menu-item-435"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435">
                                    <a href="https://www.ospreedutyfree.com/blog/">Media</a>
                                </li>
                                <li id="menu-item-1135"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1135">
                                    <a href="#">Shop Now</a>
                                    <button class="sub-menu-toggle"></button>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1136"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1136">
                                            <a target="_blank"
                                                href="https://www.adanione.com/csmia-mumbai-airport/duty-free">Mumbai
                                                Duty Free</a>
                                        </li>
                                        <li id="menu-item-1137"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1137">
                                            <a target="_blank"
                                                href="https://www.adanione.com/svpia-ahmedabad-airport/duty-free">Ahmedabad
                                                Duty Free</a>
                                        </li>
                                        <li id="menu-item-1138"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1138">
                                            <a target="_blank"
                                                href="https://www.adanione.com/jaipur-airport/duty-free">Jaipur Duty
                                                Free</a>
                                        </li>
                                        <li id="menu-item-1139"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1139">
                                            <a target="_blank"
                                                href="https://www.adanione.com/ccsia-lucknow-airport/duty-free">Lucknow
                                                Duty Free</a>
                                        </li>
                                        <li id="menu-item-1140"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1140">
                                            <a target="_blank"
                                                href="https://www.adanione.com/thiruvananthapuram-airport/duty-free">Thiruvananthapuram
                                                Duty Free</a>
                                        </li>
                                        <li id="menu-item-1141"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1141">
                                            <a target="_blank"
                                                href="https://www.adanione.com/mangaluru-airport/duty-free">Mangaluru
                                                Duty Free</a>
                                        </li>
                                        <li id="menu-item-1142"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1142">
                                            <a target="_blank"
                                                href="https://www.adanione.com/amritsar-airport/duty-free">Amritsar
                                                Duty Free</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="" class="buttonStyle ms-3 mt-3 mt-lg-0">
                                <span class="me-2">
                                    <img src="{{ URL::asset('/public/assets/images/contact.svg') }}" width="18"
                                        alt="Contact Icon">
                                </span>
                                <span>
                                    Contact Us
                                </span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Section -->
    {{-- <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h4 m-0">Ospree Duty Free</h1>
            <nav>
                <a href="{{ url('/') }}" class="text-white mx-2">Home</a>
                <a href="{{ url('/about-us') }}" class="text-white mx-2">About Us</a>
                <a href="#" class="text-white mx-2">Contact</a>
            </nav>
        </div>
    </header> --}}

    {{-- <main class="container my-4"> --}}
