<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Motors Theme Clone</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/webview/assets') }}/carousel/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="{{ asset('public/webview/assets') }}/carousel/owlcarousel/assets/owl.theme.default.min.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

        body {
            font-family: 'Montserrat', Arial, sans-serif;
        }

        a {
            text-decoration: none;
        }

        /*Nav Drawer Menu*/
        /* Drawer mobile menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 280px;
            height: 100%;
            background-color: #f1f5f9; /* light grayish */
            z-index: 1055;
            overflow-y: auto;
            transition: right 0.3s ease-in-out;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
        }

        .mobile-menu.open {
            right: 0;
        }

        .mobile-menu a {
            color: #000;
            text-decoration: none;
        }

        /* Custom dropdown for Inventory */
        .navbar .dropdown-menu {
            margin-top: 0;
            border-radius: 0;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            position: relative;
            height: 600px;
            overflow: hidden;
        }

        .hero-section img {
            object-fit: cover;
            height: 100%;
        }

        .hero-text {
            z-index: 10;
            max-width: 700px;
        }

        .address-section {
            max-width: 248px !important;
            display: flex;
            gap: 6px;
        }

        .address-section a {
            text-decoration: none;
            position: relative;
            top: -1px;
            margin-left: 3px;
            color: #cc6119;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            border-bottom: 1px dashed #cc6119;
        }

        .address-section span {
            color: #fff;
            font-size: 12px;
            line-height: 18px;
        }

        .address-section .address-icon i {
            font-size: 15px;
            color: #cc6119;
            border: 3px solid #cc6119;
            padding: 6px;
            border-radius: 50%;
        }

        .phone-section {
            max-width: 248px !important;
            display: flex;
            gap: 6px;
        }

        .phone-section .phone-icon i {
            font-size: 15px;
            color: #cc6119;
            border: 3px solid #cc6119;
            padding: 6px;
            border-radius: 50%;
        }

        .phone-number {
            color: #fff;
            font-size: 18px;
            line-height: 18px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .phone2-section .phone-number {
            color: #fff;
            font-size: 14px;
            line-height: 18px;
            font-weight: 700;
            letter-spacing: .5px;
        }


        .phone-label {
            margin-right: 2px;
            color: #cc6119 !important;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            display: block;
            margin-bottom: 1px;
            max-width: 150px;
        }

        .phone-number a {
            color: #fff;
            text-decoration: none;
        }

        .social-section i {
            font-size: 14px;
            color: #fff;

        }

        .navbar-custom {
            background-color: rgba(234, 237, 240, .8);
        !important;
            box-shadow: 0 0 4px rgba(0, 0, 0, .4);
        !important;
        }

        .navbar-nav > li a {
            color: rgba(11, 11, 11, 1) !important;
            font-size: 13px;
            line-height: 52px;
            font-weight: 700;
            font-style: normal;
            text-align: left;
            letter-spacing: 0px;
            word-spacing: 0px;
            text-transform: uppercase;
        }


        /*.navbar-nav > li:hover,*/
        /*.navbar-nav > li:hover > .dropdown-menu > li:hover,*/
        /*.navbar-nav > li:hover > .dropdown-menu > li:hover > .dropdown-menu > li:hover {*/
        /*    background-color: #cc6119;*/
        /*}*/

        .navbar-nav li a:hover {
            background-color: #cc6119;
            color: #fff !important;
        }

        /*.navbar-nav > li:hover > a {*/
        /*    color: #fff !important;*/
        /*}*/

        .header-right-section a {
            color: #cc6119;
            font-size: 13px;
            line-height: 52px;
            font-weight: 500;
            font-style: normal;
            text-align: left;
            letter-spacing: 0px;
            word-spacing: 0px;
            text-transform: uppercase;
            padding: 5px 10px;
        }

        .header-right-section > a:hover {

            background-color: #fff;
        }


        /* Base: hide all dropdowns */
        .dropdown-menu {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
            margin-top: 0.5rem;
        }

        /* Show only first-level dropdown on hover */
        .navbar-nav > .nav-item.dropdown:hover > .dropdown-menu {
            display: block;
            opacity: 1;
            margin-top: 0;
        }

        /* Position submenu correctly */
        .dropdown-submenu {
            position: relative;
        }

        /* Style for the submenu */
        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
            margin-top: 0;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        /* Show submenu only on hover */
        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
            opacity: 1;
        }

        /*Tab Section*/


        .tab-section h1 span {
            color: #f26522;
            font-weight: 600;
        }

        .ribbon {
            position: absolute;
            top: 10px;
            left: -10px;
            background-color: #6c98e1;
            color: white;
            font-size: 12px;
            padding: 5px 15px;
            transform: rotate(-45deg);
        }

        .car-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .car-title {
            color: #232628;
            overflow: hidden;
            text-transform: uppercase;
            font-size: 13px;
            line-height: 18px;
            font-weight: 700;
        }

        .car-price {
            position: relative;
            float: right;
            padding: 2px 9px 2px 9px;
            /*margin-left: 10px;*/
            background-color: #6c98e1;
            text-align: right;

        }

        .car-price .regular-price {
            font-size: 12px;
            line-height: normal;
            text-decoration: line-through;
            position: relative;
            z-index: 6;
            color: black;
            font-weight: 400;
        }

        .car-price .sale-price {
            color: #fff;
            font-size: 13px;
            line-height: 20px;
            font-weight: 600;
        }

        .card-footer span {
            display: inline-block;
            margin-right: 10px;
            color: #666;
            font-size: 14px;
        }

        .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 3px solid white;
            font-weight: bold;
            color: #cc6119 !important;
            background-color: #fff !important;
        }

        .nav-tabs .nav-link {
            color: #333;
        }

        #carTabs .nav-item .nav-link {
            display: block;
            padding: 0 25px;
            background: rgba(255, 255, 255, .1);
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none !important;
            font-weight: 700;
            color: #aaa;
            line-height: 44px;
            margin-right: 2px;
        }

        #carTabs .nav-item .nav-link .active {

        }

        /*promo section*/
        .promo-section {
            background-image: url('https://motors.stylemixthemes.com/wp-content/uploads/2020/10/01.jpg?id=2406');
            background-size: cover;
            background-position: center;
            background-attachment: fixed !important;
            padding: 200px 0;
            position: relative;
            color: #fff;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .promo-card {
            padding: 30px;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 20px;
            border-radius: 5px;
        }

        .promo-card i {
            font-size: 50px;
        }

        .promo-card h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .promo-card p {
            margin-bottom: 0;
            font-size: 15px;
        }

        .bg-yellow {
            background-color: #f6a623;
            color: #000;
        }

        .bg-red {
            background-color: #ec4137;
            color: #fff;
        }

        /*Promo Section*/
        .special-section .title {
            position: relative;
            margin-bottom: 5px;
            text-align: center;
            font-weight: 700;
            font-size: 36px;
            line-height: normal;
            color: #2c313e;
        }

        .special-section .colored-separator {
            margin-bottom: 13px;
        }

        .colored-separator {
            text-align: center;
            vertical-align: top;
            font-size: 0;
        }

        .colored-separator {
            vertical-align: top;
            font-size: 0;
            line-height: 1;
        }

        .first-long {
            margin-right: 3px;
        }

        .colored-separator .first-long, .colored-separator .last-short {
            display: inline-block;
            vertical-align: top;
            width: 33px;
            height: 5px;
            transform: skew(-40deg, 0deg);
            border-radius: 2px;
            background-color: #cc6119;
        }

        .last-short {
            width: 16px;
        }

        /*why chose us*/

        .why-choose-us {
            background-color: #f4f5f7;
            font-family: 'Segoe UI', sans-serif;
            padding: 60px 20px;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .why-choose-us h2 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .divider {
            width: 40px;
            height: 4px;
            background-color: #c65b1a;
            margin: 0 auto 40px;
        }

        .feature-box {
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }

        .feature-box i {
            font-size: 40px;
            color: #c65b1a;
            margin-bottom: 15px;
        }

        .feature-box h6 {
            font-weight: 700;
            color: #212529;
        }

        .feature-box p {
            color: #6c757d;
            font-size: 15px;
        }

        .learn-more-btn {
            margin-top: 30px;
            padding: 12px 25px;
            font-weight: 600;
            background-color: #4183d7;
            color: #fff;
            border: none;
            border-radius: 6px;
        }

        .learn-more-btn:hover {
            background-color: #3069b0;
        }

        /*hero section*/
        .hero-section2 {
            background-image: url('https://motors.stylemixthemes.com/wp-content/uploads/2020/10/02.jpg?id=2408');
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            background-position: center !important;
            background-repeat: no-repeat !important;


        }

        .hero-section2 {
            position: relative;
            height: 600px;
            overflow: hidden;
        }

        .hero-content {
            background-color: #f4a324;
            padding: 40px;
            max-width: 550px;
            color: #000;
            position: relative;
            margin-left: 5%;
        }

        .hero-content::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-top: 20px solid #f4a324;
        }

        .hero-content h1 {
            font-weight: 700;
            font-size: 28px;
        }

        .hero-content h1 span {
            display: block;
            color: white;
        }

        .hero-content p {
            font-size: 15px;
            margin-top: 15px;
            line-height: 1.6;
        }

        /*footer*/
        .footer {
            background-color: #222;
            color: #ccc;
            padding: 60px 20px 30px;
            font-size: 15px;
        }

        .footer h6 {
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer a {
            color: #a5a5a5;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer .social-icons a {
            color: #fff;
            background: #444;
            display: inline-block;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border-radius: 3px;
            margin-right: 10px;
        }

        .footer .footer-bottom {
            border-top: 1px solid #444;
            margin-top: 40px;
            padding-top: 20px;
            font-size: 13px;
            color: #777;
        }

        .footer .subscribe-form {
            display: flex;
            margin-bottom: 10px;
        }

        .footer .subscribe-form input[type="email"] {
            border: none;
            padding: 10px;
            flex: 1;
            border-radius: 3px 0 0 3px;
        }

        .footer .subscribe-form button {
            background-color: #f4a324;
            border: none;
            color: #fff;
            padding: 10px 15px;
            border-radius: 0 3px 3px 0;
        }

        .footer .photo-gallery img {
            width: 50px;
            margin-right: 5px;
            margin-bottom: 5px;
            border-radius: 4px;
        }


        /* Fix text overflow on mobile */
        @media (max-width: 767px) {

            .navbar-custom {
                padding: 20px 0 !important;
                background-color: #232628 !important;
            }

            .hero-section {
                height: auto;
            }

            .hero-text {
                position: static !important;
                transform: none !important;
                padding: 20px 0;
            }

            .top-bar .container {
                flex-direction: column;
                text-align: center;
            }

            .promo-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .promo-card i {
                font-size: 40px;
            }

        }
    </style>
</head>
<body>

@include('webview.partials.header2')
{{--<!-- Top Contact Bar -->--}}
{{--<div class="bg-dark text-light py-5 small d-none d-md-block">--}}
{{--    <div class="container d-flex justify-content-between align-items-center">--}}
{{--        <div>--}}
{{--            <a>--}}
{{--                <img src="https://motors.stylemixthemes.com/wp-content/uploads/2015/12/logo.svg" alt="Logo" class="me-3"--}}
{{--                     width="138">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="d-flex align-items-center gap-2">--}}
{{--            <div class="address-section">--}}
{{--                <div class="address-icon">--}}
{{--                    <i class="fas fa-map-marker-alt me-1"></i>--}}
{{--                </div>--}}
{{--                <span>1 840 E Garvey Ave South West, Covina, CA 91791--}}
{{--                <a href="#" class="ms-1">--}}
{{--                    View on Map--}}
{{--                </a></span>--}}

{{--            </div>--}}

{{--            <div class="phone-section">--}}
{{--                <div class="phone-icon">--}}
{{--                    <i class="fas fa-phone me-1"></i>--}}
{{--                </div>--}}

{{--                <div class="d-flex flex-column">--}}
{{--                    <span class="phone-label">Phone</span>--}}
{{--                    <span class="phone-number heading-font">--}}
{{--                    <a href="tel:878-9674-4455">--}}
{{--                        878-9674-4455--}}
{{--                    </a>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="mx-3 d-flex flex-column phone2-section">--}}
{{--                <div class="me-3 d-flex gap-2">--}}
{{--                    <span class="phone-label">SERVICE</span>--}}
{{--                    <span class="phone-number heading-font">878-3853-9576</span>--}}
{{--                </div>--}}

{{--                <div class="me-3 d-flex gap-2">--}}
{{--                    <span class="phone-label">PARTS</span>--}}
{{--                    <span class="phone-number heading-font">878-3853-9576</span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="social-section">--}}
{{--                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- Main Navbar -->--}}
{{--<nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm py-0">--}}
{{--    <div class="container justify-content-between align-items-center">--}}

{{--        <!-- Logo -->--}}
{{--        <a class="navbar-brand d-md-none d-sm-block" href="#">--}}
{{--            <img src="https://motors.stylemixthemes.com/wp-content/uploads/2015/12/logo.svg" width="138" alt="motors logo">--}}
{{--        </a>--}}

{{--        <!-- Icons on Right -->--}}
{{--        <div class="d-lg-none d-flex align-items-center gap-3">--}}
{{--            <a href="#" class="text-white"><i class="fas fa-phone-alt"></i></a>--}}
{{--            <button class="mobile-menu-toggle btn text-white fs-3 border-0 bg-transparent">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <div class="collapse navbar-collapse d-none d-lg-flex" id="mainNav">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">--}}
{{--                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle text-uppercase fw-bold text-warning" href="#"--}}
{{--                       id="inventoryDropdown" role="button" data-bs-toggle="dropdown">--}}
{{--                        Inventory--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li class="dropdown-submenu">--}}
{{--                            <a class="dropdown-item dropdown-toggle" href="#">Subcategories</a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a class="dropdown-item" href="#">Childcategory 1</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Childcategory 2</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Childcategory 3</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another Subcategory</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#">Mega Menu</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>--}}
{{--            </ul>--}}
{{--            <div class="d-none d-lg-flex align-items-center gap-3 header-right-section">--}}
{{--                <a href="#" class="text-dark">--}}
{{--                    <i class="fas fa-truck"></i>--}}
{{--                    Track--}}
{{--                </a>--}}

{{--                <a href="#" class="text-dark">--}}
{{--                    <i class="fas fa-user-alt"></i>--}}
{{--                    Account--}}
{{--                </a>--}}

{{--                <a href="#" class="text-dark">--}}
{{--                    <i class="fas fa-shopping-cart"></i>--}}
{{--                    CART--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<!-- Mobile Menu Drawer -->--}}
{{--<div id="mobileMenu" class="mobile-menu bg-light">--}}
{{--    <div class="mobile-menu-header d-flex justify-content-between align-items-center px-3 py-2 border-bottom">--}}
{{--        <span class="fw-bold fs-5">Menu</span>--}}
{{--        <button class="close-mobile-menu btn fs-3 border-0 bg-transparent">&times;</button>--}}
{{--    </div>--}}
{{--    <ul class="list-unstyled p-3">--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Home</a></li>--}}
{{--        <!-- Inventory dropdown -->--}}

{{--        <li>--}}
{{--            <a href="#" class="d-block py-2 fw-bold dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#inventoryDropdown" aria-expanded="false">--}}
{{--                Inventory <span class="float-end">&rsaquo;</span>--}}
{{--            </a>--}}
{{--            <ul id="inventoryDropdown" class="collapse list-unstyled ps-3">--}}
{{--                <li><a href="#" class="d-block py-2">Subcategory 1</a></li>--}}
{{--                <li><a href="#" class="d-block py-2">Subcategory 2</a></li>--}}
{{--                <li><a href="#" class="d-block py-2">Subcategory 3</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li><a href="#" class="d-block py-2 fw-bold">Pages <span class="float-end">&rsaquo;</span></a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Mega Menu <span class="float-end">&rsaquo;</span></a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Blog <span class="float-end">&rsaquo;</span></a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Shop</a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Contact</a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">VIN Check</a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Compare</a></li>--}}
{{--        <li><a href="#" class="d-block py-2 fw-bold">Cart</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}

<!-- Hero Section -->
<div class="hero-section position-relative">

    <div class="row">
        <div class="col-12">
            <div class="owl-carousel owl-theme" id="slider">
                @forelse($sliders as $slider)
                    <img src="{{ $slider->slider_image }}"
                         class="img-fluid w-100"
                         alt="BMW 5-Series"/>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    {{--    <div class="hero-text container text-white text-center"--}}
    {{--         style="position: absolute; top: 50%; right: 10%; transform: translateY(-50%);">--}}
    {{--        <h1 class="display-5 fw-bold">NEW BMW 5-SERIES</h1>--}}
    {{--        <h2 class="display-6 text-warning">$516 <span class="fs-5 text-white">/MO</span> <span--}}
    {{--                class="fs-6">FOR 36 MONTH</span></h2>--}}
    {{--        <p>$0 at signing after $1,750 cash back<br> $0 first payment paid by Ford up to $325<br> Taxes, title and fees--}}
    {{--            extra.</p>--}}
    {{--        <a href="#" class="btn btn-primary btn-lg mt-3">Learn More</a>--}}
    {{--    </div>--}}
</div>

{{--Tab Section--}}
<div class="bg-dark">
    <div class="container d-flex justify-content-between align-items-center px-4 py-3 text-white tab-section">

        <h1 class="mb-0 text-uppercase">CAR DEALER <span>WordPress Theme</span></h1>
        <div class="text-end">
            <i class="fa fa-car"></i> AVAILABLE <strong style="color:#2c60e4">23 CARS</strong>
        </div>
    </div>


    <div class="container" id="tabSection">
        <!-- Tabs -->
        <ul class="nav nav-tabs mt-3 flex-nowrap overflow-auto" id="carTabs" role="tablist" style="white-space: nowrap;">
            @forelse($categoryproducts as $key => $category)
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link @if($key === 0) active @endif"
                        id="tab-{{ $category->slug }}"
                        data-bs-toggle="tab"
                        data-bs-target="#pane-{{ $category->slug }}"
                        type="button"
                        role="tab"
                        aria-controls="pane-{{ $category->slug }}"
                        aria-selected="{{ $key === 0 ? 'true' : 'false' }}"
                    >
                        {{ $category->category_name }}
                    </button>
                </li>
            @empty
                <li class="nav-item"><span class="nav-link disabled">No Categories</span></li>
            @endforelse
        </ul>
    </div>
</div>


<div class="container mt-4">
    <!-- Tab Content -->
    <div class="tab-content mt-4" id="carTabsContent">
        @forelse($categoryproducts as $key => $category)
            <div
                class="tab-pane fade @if($key === 0) show active @endif"
                id="pane-{{ $category->slug }}"
                role="tabpanel"
                aria-labelledby="tab-{{ $category->slug }}"
            >
                <div class="row">
                    @forelse($category->mainproducts as $product)

                        @php
                            $relatedProducts = json_decode($product->RelatedProductIds);
                            $firstcatepro = null;

                            if (is_array($relatedProducts) && isset($relatedProducts[0]->productID)) {
                                $firstcatepro = App\Models\Product::with([
                                    'sizes' => function ($query) {
                                        $query->select('id', 'product_id', 'Discount', 'RegularPrice', 'SalePrice')->take(1);
                                    },
                                ])
                                ->where('id', $relatedProducts[0]->productID)
                                ->select('id', 'ProductName')
                                ->first();
                            }
                        @endphp
                        @if (isset($firstcatepro))
                        <div class="col-md-3 mb-4">
                            <a href="{{ url('view-product/' . $product->ProductSlug) }}">
                                <div class="car-card position-relative border">
                                    <div class="ribbon">SPECIAL</div>
                                    <img src="{{ asset( $product->ProductImage ) }}" alt="{{ $product->ProductName }}">
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="mb-1 car-title">{{ $product->ProductName }}</span>
                                            <div class="car-price discounted-price">
                                                <div class="regular-price">${{ $firstcatepro->sizes[0]->RegularPrice }}</div>
                                                <div class="sale-price">${{ $firstcatepro->sizes[0]->SalePrice }}</div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="card-footer mt-2">
                                            <span><i class="fa fa-road"></i> {{ $product->mileage }}</span>
                                            <span><i class="fa fa-gas-pump"></i> {{ $product->fuel }}</span>
                                            <span><i class="fa fa-cog"></i> {{ $product->transmission }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                    @empty
                        <p>No products in this category.</p>
                    @endforelse
                </div>
            </div>
        @empty
            <div class="tab-pane fade show active">No categories found.</div>
        @endforelse
    </div>
</div>

{{--Promo Section--}}
<section class="promo-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="promo-card bg-yellow shadow">
                    <i class="fa-solid fa-car"></i>
                    <div>
                        <h4>Are You looking for a car?</h4>
                        <p>Our cars are delivered fully-registered with all requirements completed. We'll deliver your
                            car wherever you are.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="promo-card bg-red shadow">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <div>
                        <h4>Do You want to sell a car?</h4>
                        <p>What’s your car worth? Receive the absolute best value for your trade-in vehicle. We even
                            handle all paperwork. Schedule your appointment today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--Special Section--}}
<section class="special-section">
    <div class="container">
        <div class="title heading-font d-flex justify-content-center">
            <h2 class="title heading-font text-center">SPECIALS</h2>
        </div>
        <div class="colored-separator mb-3">
            <div class="first-long stm-base-background-color"></div>
            <div class="last-short stm-base-background-color"></div>
        </div>

        <div class="owl-carousel owl-theme" id="specialSlide">
            @forelse($topproducts as $promotional)
                @php
                    $firstpro = App\Models\Product::with([
                        'sizes' => function ($query) {
                            $query
                                ->select('id', 'product_id', 'Discount', 'RegularPrice', 'SalePrice')
                                ->take(1);
                        },
                    ])
                        ->where('id', json_decode($promotional->RelatedProductIds)[0]->productID)
                        ->select('id', 'ProductName')
                        ->first();

                @endphp
                @if (isset($firstpro))
                    <div class="item mb-4">
                <a href="{{ url('view-product/' . $promotional->ProductSlug) }}">
                    <div class="car-card position-relative border">
                        <div class="ribbon">SPECIAL</div>
                        <img src="{{  asset($promotional->ProductImage) }}"
                             alt="car">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <span class="mb-1 car-title">{{ $promotional->ProductName }}</span>
                                <div class="car-price discounted-price">
                                    <div class="regular-price">${{  $firstpro->sizes[0]->RegularPrice }}</div>
                                    <div class="sale-price">${{  $firstpro->sizes[0]->SalePrice }}</div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer mt-2">
                                <span><i class="fa fa-road"></i> 100</span>
                                <span><i class="fa fa-gas-pump"></i> 18/26</span>
                                <span><i class="fa fa-cog"></i> Automatic</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
                @endif
            @empty
            @endforelse

        </div>
    </div>
</section>

{{--why chose us section--}}
<section class="why-choose-us">
    <div class="container">
        <h2>WHY CHOOSE US</h2>
        <div class="colored-separator mb-4">
            <div class="first-long stm-base-background-color"></div>
            <div class="last-short stm-base-background-color"></div>
        </div>

         <div class="row text-center justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4 feature-box">
                <i class="bi bi-tag"></i>
                <h6>FINANCING MADE EASY</h6>
                <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
            <div class="col-md-3 col-sm-6 mb-4 feature-box">
                <i class="bi bi-broadcast"></i>
                <h6>WIDE RANGE OF BRANDS</h6>
                <p>With a robust selection of popular vehicles, including leading models from BMW and Ford.</p>
            </div>
            <div class="col-md-3 col-sm-6 mb-4 feature-box">
                <i class="bi bi-chat-dots"></i>
                <h6>TRUSTED BY THOUSANDS</h6>
                <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>
            </div>
            <div class="col-md-3 col-sm-6 mb-4 feature-box">
                <i class="bi bi-file-earmark-text"></i>
                <h6>CAR SERVICE & MAINTENANCE</h6>
                <p>Our service department helps keep your car safe and road-ready for many more years.</p>
            </div>
        </div>

        <button class="learn-more-btn">LEARN MORE</button>
    </div>
</section>

{{--Hero 2 Section--}}
<section class="hero-section2">
    <div class="hero-content shadow container">
        <h1>
            <span style="color: #212529;">CAR DEALERSHIP</span>
            <span>AUTOMOTIVE WP THEME</span>
        </h1>
        <p>
            With specialists on hand to help with any part of the car shopping or vehicle ownership experience, Motors
            provides financing, car service and a great selection of vehicles for luxury car shoppers in Chicago, IL.
            Motors is ultimate Automotive, Car Dealer WordPress theme.
        </p>
    </div>
</section>

{{--Footer--}}
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-3">
                <h6><span style="color:#4c8cf5;">MOTORS</span> DEALERSHIP</h6>
                <p>
                    As the leading dealer in Chicago, we are confident that we will save you time and money. Motors is
                    ultimate Automotive, Car Dealer WordPress theme.
                </p>
            </div>

            <!-- Column 2 -->
            <div class="col-md-3">
                <h6>PHOTO GALLERY</h6>
                <div class="photo-gallery d-flex flex-wrap">
                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/06-150x150.jpg" alt="">
                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/04-12-150x150.jpg" alt="">
                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/03-25-150x150.jpg" alt="">
                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/01-25-150x150.jpg" alt="">
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-3">
                <h6>LATEST BLOG POSTS</h6>
                <p>The Tesla Model S isn’t the first truly autonomous car on the road...</p>
                <a href="#"><i class="fa-regular fa-comments"></i> No Comments</a>
            </div>

            <!-- Column 4 -->
            <div class="col-md-3">
                <h6>SOCIAL NETWORK</h6>
                <div class="social-icons mt-2">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4" style="border-color: #444;">

        <div class="row">
            <!-- Subscribe -->
            <div class="col-md-3">
                <h6>SUBSCRIBE</h6>
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter your email...">
                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                </form>
                <small>Get latest updates and offers.</small>
            </div>

            <!-- Sales Hours -->
            <div class="col-md-3">
                <h6>SALES HOURS</h6>
                <p><strong>Monday - Friday:</strong> 09:00AM - 09:00PM</p>
                <p><strong>Saturday:</strong> 09:00AM - 07:00PM</p>
                <p><strong>Sunday:</strong> Closed</p>
            </div>

            <!-- Service Hours -->
            <div class="col-md-3">
                <h6>SERVICE HOURS</h6>
                <p><strong>Monday - Friday:</strong> 09:00AM - 09:00PM</p>
                <p><strong>Saturday:</strong> 09:00AM - 07:00PM</p>
                <p><strong>Sunday:</strong> Closed</p>
            </div>

            <!-- Parts Hours -->
            <div class="col-md-3">
                <h6>PARTS HOURS</h6>
                <p><strong>Monday - Friday:</strong> 09:00AM - 09:00PM</p>
                <p><strong>Saturday:</strong> 09:00AM - 07:00PM</p>
                <p><strong>Sunday:</strong> Closed</p>
            </div>
        </div>

        <div class="footer-bottom mt-4 text-center">
            Copyright © 2021. Motors – WordPress Theme by StylemixThemes
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('public/webview/assets') }}/carousel/owlcarousel/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Disable dropdowns on desktop (keep them clickable on mobile)
        if (window.innerWidth >= 768) {
            document.querySelectorAll('.dropdown-toggle').forEach(function (el) {
                el.removeAttribute('data-bs-toggle');
                el.removeAttribute('data-bs-target');
            });
        }

        // Handle icon change when collapsing/expanding
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function (toggle) {
            const targetId = toggle.getAttribute('data-bs-target');
            const collapseEl = document.querySelector(targetId);

            if (collapseEl) {
                collapseEl.addEventListener('show.bs.collapse', function () {
                    toggle.querySelector('span').innerHTML = '&darr;';
                });
                collapseEl.addEventListener('hide.bs.collapse', function () {
                    toggle.querySelector('span').innerHTML = '&rsaquo;';
                });
            }
        });

    });


    $('#slider').owlCarousel({
        loop: true,
        // margin: 10,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    });

    $("#specialSlide").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
</script>

<script>
    const menuToggle = document.querySelector(".mobile-menu-toggle");
    const mobileMenu = document.querySelector("#mobileMenu");
    const closeBtn = document.querySelector(".close-mobile-menu");

    menuToggle.addEventListener("click", () => {
        mobileMenu.classList.add("open");
    });

    closeBtn.addEventListener("click", () => {
        mobileMenu.classList.remove("open");
    });

    // Optional: close menu when clicking outside
    document.addEventListener("click", (e) => {
        if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
            mobileMenu.classList.remove("open");
        }
    });


</script>
</body>
</html>
