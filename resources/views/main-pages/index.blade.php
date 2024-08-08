@include('layouts.header')

<body>
    <!-- Preloader Start -->

    @include('layouts.preload')

    <!--<< Mouse Cursor Start >>-->

    {{-- <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div> --}}

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ url('/') }}">
                                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn text-center">
                                Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->

    @include('layouts.navigation')

    <!-- Modal Version 1 -->
    <div class="modal modal-common-wrap fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                    <div class="modal-common-content">
                        <div class="box">
                            <h2>
                                welcome back!
                            </h2>
                            <form action="#" class="login-from">
                                <div class="form-grp cmn-mb">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="form-grp">
                                    <input type="text" placeholder="Enter Password">
                                </div>
                                <div
                                    class="d-flex forgot-inner-area cmn-mb justify-content-between gap-2 flex-wrap align-items-center">
                                    <div class="form-check checkmark-inner">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="forgot">
                                        Forgot Your password?
                                    </a>
                                </div>
                                <button type="button" class="theme-btn w-100">
                                    <span>
                                        Log in
                                    </span>
                                </button>
                            </form>
                            <span class="orting-badge">
                                Or
                            </span>
                            <div class="d-grid gap-3">
                                <a href="#" class="cmn-social">
                                    <img src="assets/img/sign/google.png" alt="img">
                                    Continue With Google
                                </a>
                                <a href="#" class="cmn-social">
                                    <img src="assets/img/sign/fb.png" alt="img">
                                    continue with facebook
                                </a>
                            </div>
                            <div class="form-check d-flex align-items-center gap-2 from-customradio">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    i accept your terms & conditions
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-right-thumb position-relative">
                        <img src="assets/img/sign/login.png" alt="img">
                        <div class="signlogin-btnwrap">
                            <button class="theme-create style-border" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                create account
                            </button>
                            <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Log In
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Version 2 -->
    <div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                    <div class="modal-common-content">
                        <div class="box">
                            <h2>
                                Create account
                            </h2>
                            <form action="#" class="login-from">
                                <div class="form-grp cmn-mb">
                                    <input type="text" placeholder="User name">
                                </div>
                                <div class="form-grp cmn-mb">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="form-grp cmn-mb">
                                    <input type="text" placeholder="Enter Password">
                                </div>
                                <div class="form-grp">
                                    <input type="text" placeholder="Enter Confirm password">
                                </div>
                            </form>
                            <span class="orting-badge">
                                Or
                            </span>
                            <div class="d-grid gap-3">
                                <a href="#" class="cmn-social">
                                    <img src="assets/img/sign/google.png" alt="img">
                                    Continue With Google
                                </a>
                                <a href="#" class="cmn-social">
                                    <img src="assets/img/sign/fb.png" alt="img">
                                    continue with facebook
                                </a>
                            </div>
                            <div class="pb-xxl-3">
                                <div class="form-check d-flex align-items-center gap-2 from-customradio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault11">
                                    <label class="form-check-label" for="flexRadioDefault11">
                                        i accept your terms & conditions
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="theme-btn w-100">
                                    <span>
                                        Log in
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-right-thumb position-relative">
                        <img src="assets/img/sign/create.png" alt="img">
                        <div class="signlogin-btnwrap">
                            <button class="theme-create style-border" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                create account
                            </button>
                            <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Log In
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Hero Section Start -->
    <section class="hero-section hero-1 bg-cover fix" style="background-image: url('assets/img/hero/hero-bg-1.jpg');">
        <div class="circle-shape-left">
            <img src="assets/img/hero/hero-1-circle-left.png" alt="shape-img">
        </div>
        <div class="circle-shape-right">
            <img src="assets/img/hero/hero-1-circle-right.png" alt="shape-img">
        </div>
        <div class="dot-left">
            <img src="assets/img/hero/hero-1-dot-left.png" alt="img">
        </div>
        <div class="dot-right">
            <img src="assets/img/hero/hero-1-dot-right.png" alt="img">
        </div>
        <div class="hero-social">
            <span>Follow on</span>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="sub-text wow fadeInUp">
                            <img src="assets/img/hero/activity.png" alt="img" class="me-2">
                            Everything You Need to Growth Up Your Business
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Blue Print Technology And Bussiness Consulting
                        </h1>
                        <h6 class="wow fadeInUp" data-wow-delay=".5s">Unlimited storage, unmetered bandwidth,
                            unbeatable hosting. <br> This gator’s got ya covered.</h6>
                        <div class="hero-author">
                            <a href="{{ url('/') }}" class="theme-btn bg-color-2 wow fadeInUp"
                                data-wow-delay=".7s">
                                Start Free <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                            <div class="author-content wow fadeInUp" data-wow-delay=".9s;">
                                <img src="assets/img/hero/author-img.png" alt="author-img">
                                <div class="content">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p class="text-white">450+ reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/hero/hero-llustration.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Doming Name Section Start -->
    <section class="doming-name-area section-padding pt-0">
        <div class="container">
            {{-- <div class="doming-name-wrapper">
                    <h3 class="text-white wow fadeInUp" data-wow-delay=".3s">Find Your Perfect Domain Name</h3>
                    <form action="#" class="doming-input-form wow fadeInUp" data-wow-delay=".5s">
                        <div class="doming-input">
                            <input type="text" placeholder="domain.com">
                            <button class="theme-btn bg-color-2" type="submit">Search Now</button>
                            <div class="select-area">
                                <select name="cate" class="category">
                                    <option value="1">
                                        .com
                                    </option>
                                    <option value="1">
                                        .net
                                    </option>
                                    <option value="1">
                                        .info
                                    </option>
                                    <option value="1">
                                        .store
                                    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <ul class="doming-list">
                        <li class="wow fadeInUp" data-wow-delay=".2s">
                            <span>.com</span>
                            $9.95
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            <span>.Info</span>
                            $11.99
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".6s">
                            <span>.Net</span>
                            $8.95
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".8s">
                            <span>.Store</span>
                            $10.50
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".9s">
                            <span>.ORG</span>
                            $11.95
                        </li>
                    </ul>
                </div> --}}
        </div>
    </section>
    <!-- Hosting Section Start -->
    <section class="hosting-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Best hosting</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Discover Most Powerful Web <br> Hosting Features
                    </h2>
                </div>
                <a href="vps-hosting.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                        class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-1.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="dedicated-hosting.html">Dedicated Hosting</a></h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-2.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="dedicated-hosting.html">Email Hosting</a></h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-3.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="dedicated-hosting.html">Ecommerce Hosting</a></h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-4.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="cloud-hosting.html">Cloud Hosting</a></h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-5.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="reseller-hosting.html">Reseller Hosting</a></h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-6.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="vps-hosting.html">VPS Hosting</a></h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section Start -->
    <section class="pricing-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <span class="style-border wow fadeInUp">Pricing Plans</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Get the More Powerful With Hostech <br> Website Hosting
                    Plans</h2>
            </div>
            <div class="pricing-tab-header">
                <div class="arrow-shape">
                    <img src="assets/img/arrow.png" alt="img">
                </div>
                <ul class="nav" role="tablist">
                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                        <a href="#monthly" data-bs-toggle="tab" class="nav-link active" aria-selected="true"
                            role="tab">
                            Monthly
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                        <a href="#yearly" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                            role="tab" tabindex="-1">
                            Yearly
                        </a>
                    </li>
                </ul>
                <div class="save-text">
                    Save 25%
                </div>
            </div>
            <div class="tab-content">
                <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="pricing-card-items responsive-pricing-style">
                                <div class="wing-shape">
                                    <img src="assets/img/wing-shape.png" alt="img">
                                </div>
                                <div class="icon">
                                    <img src="assets/img/pricing/icon-1.png" alt="img">
                                </div>
                                <div class="pricing-bg">
                                    <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                </div>
                                <div class="pricing-header">
                                    <div class="price-content">
                                        <h3>Shared Hosting</h3>
                                        <p>Collaboratively formulate</p>
                                    </div>
                                    <h2>$29</h2>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free 15 GB Linux Hosting
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                    <li class="color-2">
                                        <i class="fa-solid fa-xmark"></i>
                                        Dedicated IP Address
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="pricing-card-items responsive-pricing-style">
                                <div class="wing-shape">
                                    <img src="assets/img/wing-shape.png" alt="img">
                                </div>
                                <div class="icon">
                                    <img src="assets/img/pricing/icon-1.png" alt="img">
                                </div>
                                <div class="pricing-bg">
                                    <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                </div>
                                <div class="pricing-header">
                                    <div class="price-content">
                                        <h3>VPS Hosting</h3>
                                        <p>Collaboratively formulate</p>
                                    </div>
                                    <h2>$39</h2>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free 15 GB Linux Hosting
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                    <li class="color-2">
                                        <i class="fa-solid fa-xmark"></i>
                                        Dedicated IP Address
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="pricing-card-items responsive-pricing-style">
                                <div class="wing-shape">
                                    <img src="assets/img/wing-shape.png" alt="img">
                                </div>
                                <div class="icon">
                                    <img src="assets/img/pricing/icon-1.png" alt="img">
                                </div>
                                <div class="pricing-bg">
                                    <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                </div>
                                <div class="pricing-header">
                                    <div class="price-content">
                                        <h3>Cloud Hosting</h3>
                                        <p>Collaboratively formulate</p>
                                    </div>
                                    <h2>$59</h2>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free 15 GB Linux Hosting
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                    <li class="color-2">
                                        <i class="fa-solid fa-xmark"></i>
                                        Dedicated IP Address
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="yearly" class="tab-pane fade" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-card-items responsive-pricing-style">
                                <div class="wing-shape">
                                    <img src="assets/img/wing-shape.png" alt="img">
                                </div>
                                <div class="icon">
                                    <img src="assets/img/pricing/icon-1.png" alt="img">
                                </div>
                                <div class="pricing-bg">
                                    <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                </div>
                                <div class="pricing-header">
                                    <div class="price-content">
                                        <h3>Shared Hosting</h3>
                                        <p>Collaboratively formulate</p>
                                    </div>
                                    <h2>$29</h2>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free 15 GB Linux Hosting
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                    <li class="color-2">
                                        <i class="fa-solid fa-xmark"></i>
                                        Dedicated IP Address
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-card-items responsive-pricing-style">
                                <div class="wing-shape">
                                    <img src="assets/img/wing-shape.png" alt="img">
                                </div>
                                <div class="icon">
                                    <img src="assets/img/pricing/icon-1.png" alt="img">
                                </div>
                                <div class="pricing-bg">
                                    <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                </div>
                                <div class="pricing-header">
                                    <div class="price-content">
                                        <h3>VPS Hosting</h3>
                                        <p>Collaboratively formulate</p>
                                    </div>
                                    <h2>$39</h2>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free 15 GB Linux Hosting
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                    <li class="color-2">
                                        <i class="fa-solid fa-xmark"></i>
                                        Dedicated IP Address
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-card-items responsive-pricing-style">
                                <div class="wing-shape">
                                    <img src="assets/img/wing-shape.png" alt="img">
                                </div>
                                <div class="icon">
                                    <img src="assets/img/pricing/icon-1.png" alt="img">
                                </div>
                                <div class="pricing-bg">
                                    <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                </div>
                                <div class="pricing-header">
                                    <div class="price-content">
                                        <h3>Cloud Hosting</h3>
                                        <p>Collaboratively formulate</p>
                                    </div>
                                    <h2>$59</h2>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free 15 GB Linux Hosting
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                    <li class="color-2">
                                        <i class="fa-solid fa-xmark"></i>
                                        Dedicated IP Address
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-title wow fadeInUp" data-wow-delay=".4s">
                <p>Cost-effective hosting that delivers secure, reliable performance. </p>
                <a href="pricing.html" class="theme-btn">See all plan & details</a>
            </div>
        </div>
    </section>
    <!-- Cta Contact Section Start -->
    <section class="cta-contct-section section-padding bg-cover fix"
        style="background-image: url('assets/img/cta/cta-conact-bg.jpg');">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="cta-contact-left">
                        <div class="section-title">
                            <span class="white-text wow fadeInUp">Contact Us</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">24/7 Customer Support Here to
                                Assist <br> You Every Step of the
                                Way
                            </h2>
                        </div>
                        <a href="contact.html" class="theme-btn bg-color-2 mt-4 mt-md-0 wow fadeInUp"
                            data-wow-delay=".5s">WhatsApp Now <i
                                class="fas 
                                fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="cta-contact-image">
                        <img src="assets/img/cta-man.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Section Start -->
    <div class="brand-section pt-100 pb-0">
        <div class="container">
            <div class="swiper brand-slider bor-bottom pb-100 pt-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/indieplex.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/nextech.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/techbox.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/wattse.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/chatbot.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/indieplex.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hosting Section Start -->
    <section class="hosting section-padding fix">
        <div class="container">
            <div class="hosting-wrapper">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Best hosting</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Get Started Fast & Easily with Best
                                    Hosting</h2>
                            </div>
                            <div class="hosting-items wow fadeInUp mt-4 mt-md-0" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/hosting/icon-9.png" alt="img">
                                </div>
                                <div class="content">
                                    <h4>Better Security and faster Server</h4>
                                    <p>Cursus libero sit amet ultrices. Nullam sit amet ornare neque duis vitae congue
                                        ante, nec tempus quam. Donec non.</p>
                                </div>
                            </div>
                            <div class="hosting-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="assets/img/hosting/icon-10.png" alt="img">
                                </div>
                                <div class="content">
                                    <h4>Better Security and faster Server</h4>
                                    <p>Cursus libero sit amet ultrices. Nullam sit amet ornare neque duis vitae congue
                                        ante, nec tempus quam. Donec non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hosting-image">
                            <img src="assets/img/hosting/hosting.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding bg-cover"
        style="background-image: url('assets/img/section-bg.jpg');">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="white-text wow fadeInUp">Testimonials</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Latest Clients Feedback</h2>
                </div>
                <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                    <button class="array-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button class="array-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="tesimonial-wrapper">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="33"
                                        viewBox="0 0 44 33" fill="none">
                                        <path
                                            d="M16 16.2929L0.5 31.7929V0.5H16V16.2929ZM43.5 16.2929L28 31.7929V0.5H43.5V16.2929Z"
                                            stroke="white" />
                                    </svg>
                                </div>
                                <div class="client-image bg-cover"
                                    style="background-image: url('assets/img/testimonial/client-1.jpg');">
                                    <div class="circle-shape">
                                        <img src="assets/img/testimonial/circle.png" alt="">
                                    </div>
                                </div>
                                <p>
                                    Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium
                                    metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo
                                </p>
                                <div class="client-info">
                                    <h4>Cameron Williamson</h4>
                                    <span>Marketing Coordinator</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="33"
                                        viewBox="0 0 44 33" fill="none">
                                        <path
                                            d="M16 16.2929L0.5 31.7929V0.5H16V16.2929ZM43.5 16.2929L28 31.7929V0.5H43.5V16.2929Z"
                                            stroke="white" />
                                    </svg>
                                </div>
                                <div class="client-image bg-cover"
                                    style="background-image: url('assets/img/testimonial/client-2.jpg');">
                                    <div class="circle-shape">
                                        <img src="assets/img/testimonial/circle.png" alt="">
                                    </div>
                                </div>
                                <p>
                                    Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium
                                    metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo
                                </p>
                                <div class="client-info">
                                    <h4>Cameron Williamson</h4>
                                    <span>Marketing Coordinator</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="33"
                                        viewBox="0 0 44 33" fill="none">
                                        <path
                                            d="M16 16.2929L0.5 31.7929V0.5H16V16.2929ZM43.5 16.2929L28 31.7929V0.5H43.5V16.2929Z"
                                            stroke="white" />
                                    </svg>
                                </div>
                                <div class="client-image bg-cover"
                                    style="background-image: url('assets/img/testimonial/client-1.jpg');">
                                    <div class="circle-shape">
                                        <img src="assets/img/testimonial/circle.png" alt="">
                                    </div>
                                </div>
                                <p>
                                    Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium
                                    metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo
                                </p>
                                <div class="client-info">
                                    <h4>Cameron Williamson</h4>
                                    <span>Marketing Coordinator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="faq-image">
                            <img src="assets/img/faq.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">FAQ’S</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Prioritize Your Site’s Safety and Security
                                </h2>
                            </div>
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                How to Install WordPress theme on cPanel?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam fringilla erat id ante
                                                commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Do you have Custom Hosting Service?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam fringilla erat id ante
                                                commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3"
                                                aria-expanded="false" aria-controls="faq3">
                                                Better Security And Faster Server?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages Lorem Ipsum but the majority have
                                                suffered alteration in some form, by injected humor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                Deployment Within Few Minutes
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam fringilla erat id ante
                                                commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section Start -->
    <section class="news-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Our News</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Explore Latest News</h2>
                </div>
                <a href="news.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See All More <i
                        class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/01.jpg" alt="news-img">
                        </div>
                        <div class="news-content">
                            <div class="post-list">
                                <span>Shared Hosting</span>
                                <p>MARCH 24, 2024</p>
                            </div>
                            <h3>
                                <a href="news-details.html">Attentive was born in 2015 help sales teams</a>
                            </h3>
                            <div class="author-items">
                                <div class="author-image">
                                    <div class="author-img bg-cover"
                                        style="background-image: url('assets/img/news/post-1.png');"></div>
                                    <div class="content">
                                        <h6>Admin</h6>
                                        <p>Co, Founder</p>
                                    </div>
                                </div>
                                <a href="news-details.html" class="link-btn">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/02.jpg" alt="news-img">
                        </div>
                        <div class="news-content">
                            <div class="post-list">
                                <span>Uncategorized</span>
                                <p>MARCH 22, 2024</p>
                            </div>
                            <h3>
                                <a href="news-details.html">Best and fastest data
                                    server ever</a>
                            </h3>
                            <div class="author-items">
                                <div class="author-image">
                                    <div class="author-img bg-cover"
                                        style="background-image: url('assets/img/news/post-2.png');"></div>
                                    <div class="content">
                                        <h6>Admin</h6>
                                        <p>Co, Founder</p>
                                    </div>
                                </div>
                                <a href="news-details.html" class="link-btn">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/03.jpg" alt="news-img">
                        </div>
                        <div class="news-content">
                            <div class="post-list">
                                <span>Reseller Hosting</span>
                                <p>MARCH 14, 2024</p>
                            </div>
                            <h3>
                                <a href="news-details.html">Life won’t one beast air over above all</a>
                            </h3>
                            <div class="author-items">
                                <div class="author-image">
                                    <div class="author-img bg-cover"
                                        style="background-image: url('assets/img/news/post-3.png');"></div>
                                    <div class="content">
                                        <h6>Admin</h6>
                                        <p>Co, Founder</p>
                                    </div>
                                </div>
                                <a href="news-details.html" class="link-btn">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Section Start -->
    <div class="brand-section fix section-padding section-bg pt-0">
        <div class="container">
            <h3 class="brand-head-title"><img src="assets/img/w.png" alt="img">Recommended By
                <span>WordPress.org</span></h3>
            <div class="swiper brand-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/trustipilot.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/google.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/wpbeginner.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/hostadvice.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/capterra.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
