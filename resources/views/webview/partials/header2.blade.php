
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
        box-shadow: -2px 0 10px rgba(0,0,0,0.2);
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
    @media (min-width: 767px) {

        .hide-sm {
            display: none !important;
        }

    }

</style>
<!-- Top Contact Bar -->


<div class="bg-dark text-light py-5 small d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <a href="{{ url('/') }}">
                <img src="{{ asset($basicinfo->logo) }}" alt="Logo" class="me-3"
                     width="138">
            </a>
        </div>
        <div class="d-flex align-items-center gap-2">
            <div class="address-section">
                <div class="address-icon">
                    <i class="fas fa-map-marker-alt me-1"></i>
                </div>
                <span>{{ $basicinfo->address }}
                <a href="{{ $basicinfo->twitter }}" class="ms-1">
                    View on Map
                </a></span>

            </div>

            <div class="phone-section">
                <div class="phone-icon">
                    <i class="fas fa-phone me-1"></i>
                </div>

                <div class="d-flex flex-column">
                    <span class="phone-label">Phone</span>
                    <span class="phone-number heading-font">
                    <a href="tel:+88{{ $basicinfo->phone_one }}">
                        {{ $basicinfo->phone_one }}
                    </a>
                    </span>
                </div>
            </div>


            <div class="mx-3 d-flex flex-column phone2-section">
                <div class="me-3 d-flex gap-2">
                    <span class="phone-label">SERVICE</span>
                    <span class="phone-number heading-font">{{ $basicinfo->phone_one }}</span>
                </div>

                <div class="me-3 d-flex gap-2">
                    <span class="phone-label">PARTS</span>
                    <span class="phone-number heading-font">{{ $basicinfo->phone_two }}</span>
                </div>
            </div>

            <div class="social-section">
                <a href="{{ $basicinfo->facebook }}"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm py-0">
    <div class="container justify-content-between align-items-center">

        <!-- Logo -->
        <a class="navbar-brand d-md-none d-sm-block" href="{{ url('/') }}">
            <img src="{{ asset($basicinfo->logo) }}" width="138" alt="motors logo">
        </a>

        <!-- Icons on Right -->
        <div class="d-lg-none d-flex align-items-center gap-3 hide-sm">
            <a href="tel:+88{{$basicinfo->phone_one  }}" class="text-white"><i class="fas fa-phone-alt"></i></a>
            <button class="mobile-menu-toggle btn text-white fs-3 border-0 bg-transparent">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse d-none d-lg-flex" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase fw-bold text-warning" href="#"
                       id="inventoryDropdown" role="button" data-bs-toggle="dropdown">
                        Shop
                    </a>

                    <ul class="dropdown-menu">
                        @forelse($categories->take(10) as $category)
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('category-page', $category->slug) }}">{{ $category->category_name }}</a>

                            @if($category->subcategories->count() > 0)
                            <ul class="dropdown-menu">
                                @forelse($category->subcategories->take(10) as $subcategory)
                                <li><a class="dropdown-item" href="#">{{ $subcategory->sub_category_name }}</a></li>
                                @empty
                                @endforelse
                            </ul>
                            @endif
                        </li>
                        @empty
                        @endforelse
{{--                        <li><a class="dropdown-item" href="#">Another Subcategory</a></li>--}}
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('combo') }}">Combo</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('venture/about_us') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('venture/contact_us') }}">Contact Us</a></li>
            </ul>
            <div class="d-none d-lg-flex align-items-center gap-3 header-right-section">
                <a href="{{ route('order-track') }}" class="text-dark">
                    <i class="fas fa-truck"></i>
                    Track
                </a>

                <a href="{{ route('dashboard') }}" class="text-dark">
                    <i class="fas fa-user-alt"></i>
                    Account
                </a>

                <a href="{{ route('cart-page') }}" class="text-dark">
                    <i class="fas fa-shopping-cart"></i>
                    CART
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Drawer -->
<div id="mobileMenu" class="mobile-menu bg-light">
    <div class="mobile-menu-header d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
        <span class="fw-bold fs-5">Menu</span>
        <button class="close-mobile-menu btn fs-3 border-0 bg-transparent">&times;</button>
    </div>
    <ul class="list-unstyled p-3">
        <li><a href="{{ url('/') }}" class="d-block py-2 fw-bold">Home</a></li>
        <!-- Inventory dropdown -->

        <li>
            <a href="#" class="d-block py-2 fw-bold dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#inventoryDropdown" aria-expanded="false">
                Shop <span class="float-end">&rsaquo;</span>
            </a>
            <ul id="inventoryDropdown" class="collapse list-unstyled ps-3">
                @forelse($categories->take(10) as $category)
                <li><a href="{{ route('category-page', $category->slug) }}" class="d-block py-2">{{ $category->category_name }}</a></li>
                @empty
                @endforelse
            </ul>
        </li>

        <li><a href="{{ route('combo') }}" class="d-block py-2 fw-bold">Combo</a></li>
        <li><a href="{{ route('blog') }}" class="d-block py-2 fw-bold">Blog</a></li>
        <li><a href="{{ url('venture/contact_us') }}" class="d-block py-2 fw-bold">Contact US</a></li>
        <li><a href="{{ url('venture/about_us') }}" class="d-block py-2 fw-bold">About US</a></li>

        <li><a href="{{ route('cart-page') }}" class="d-block py-2 fw-bold">Cart</a></li>
        <li><a href="{{ route('order-track') }}" class="d-block py-2 fw-bold">Track Order</a></li>
        <li><a href="{{ route('dashboard') }}" class="d-block py-2 fw-bold">Account</a></li>
    </ul>
</div>
