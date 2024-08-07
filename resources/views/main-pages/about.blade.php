@include('layouts.header')

<!-- Preloader Start -->
@include('layouts.preload')

<!--<< Mouse Cursor Start >>-->



<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{url('/')}}">
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
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat
                    leo urna eget eros. Duis Aenean a imperdiet risus.
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
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
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

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
    <div class="container">
        <div class="page-heading">
            <div class="page-header-left">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">About Us</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-regular fa-chevrons-right"></i>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
            <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                <img src="assets/img/breadcrumb.png" alt="img">
            </div>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="about-section section-padding fix">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-items">
                        <div class="about-sub">
                            Successful Hosting 25k+
                        </div>
                        <div class="shape-image">
                            <img src="assets/img/about/shape.png" alt="img">
                        </div>
                        <div class="about-image-1 wow fadeInLeft" data-wow-delay=".3s">
                            <img src="assets/img/about/01.jpg" alt="img">
                            <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="assets/img/about/02.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">ABOUT US</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Choose a Website Hosting Partner Right Now.
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.
                        </p>
                        <div class="about-counter-items">
                            <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                                <h2><span class="count">50</span>k</h2>
                                <h6>Global Customers</h6>
                            </div>
                            <div class="counter-items ps-0 wow fadeInUp" data-wow-delay=".5s">
                                <h2><span class="count">98</span>%</h2>
                                <h6>Success Case</h6>
                            </div>
                            <div class="video-thumb wow fadeInUp" data-wow-delay=".7s">
                                <img src="assets/img/about/video-img.jpg" alt="video-img">
                                <div class="video-box">
                                    <span class="button-text wow fadeInUp">
                                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                            class="video-btn ripple video-popup">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Section Start -->
<section class="feature-hosting-section fix section-padding section-bg">
    <div class="container">
        <div class="feature-content-warpper style-2">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="feature-hosting-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">Best hosting</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Advance features for the <br> advanced user
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Pellentesque varius mauris sit amet nisi tincidunt finibus Donec faucibus diam quis feugiat
                            accumsan Integer molestie sapien ut ipsum fermentum feugiat Curabitur.
                        </p>
                        <div class="list-items">
                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    <i class="far fa-check"></i>
                                    Branding and design Identity
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Web site Marketing Solutions
                                </li>
                            </ul>
                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                <li>
                                    <i class="far fa-check"></i>
                                    Unlimited Application Installation
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    24/7 system Monitoring
                                </li>
                            </ul>
                        </div>
                        <a href="{{url('/about')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                                class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="feature-hosting-image-2">
                        <div class="icon-box-1">
                            <img src="assets/img/hosting/icon-1.png" alt="img">
                        </div>
                        <div class="icon-box-2">
                            <img src="assets/img/hosting/icon-3.png" alt="img">
                        </div>
                        <div class="thumb">
                            <img src="assets/img/gym-man.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="style-border wow fadeInUp">Our Expart</span>
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our expert team</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu
                Sed odio massa</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="team-card-item">
                    <div class="team-image">
                        <img src="assets/img/team/01.jpg" alt="img">
                    </div>
                    <div class="team-content bg-cover"
                        style="background-image: url('assets/img/team/team-shape.png');">
                        <h5><a href="team-details.html">Darlene Robertson</a></h5>
                        <p>Web Designer</p>
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="team-card-item">
                    <div class="team-image">
                        <img src="assets/img/team/02.jpg" alt="img">
                    </div>
                    <div class="team-content bg-cover"
                        style="background-image: url('assets/img/team/team-shape.png');">
                        <h5><a href="team-details.html">Leslie Alexander</a></h5>
                        <p>Nursing Assistant</p>
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="team-card-item">
                    <div class="team-image">
                        <img src="assets/img/team/03.jpg" alt="img">
                    </div>
                    <div class="team-content bg-cover"
                        style="background-image: url('assets/img/team/team-shape.png');">
                        <h5><a href="team-details.html">Ralph Edwards</a></h5>
                        <p>President of Sales</p>
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="team-card-item">
                    <div class="team-image">
                        <img src="assets/img/team/04.jpg" alt="img">
                    </div>
                    <div class="team-content bg-cover"
                        style="background-image: url('assets/img/team/team-shape.png');">
                        <h5><a href="team-details.html">Kristin Watson</a></h5>
                        <p>Software Tester</p>
                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                            <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Choose Us Section Start -->
<section class="choose-us-section fix section-padding bg-cover"
    style="background-image: url('assets/img/feature-bg.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <span class="style-border-white text-white wow fadeInUp">Why choose uS</span>
            <h2 class="mb-3 text-white wow fadeInUp" data-wow-delay=".3s">Why Choose Hostech</h2>
            <p class="text-white wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante
                interdum eu Sed odio massa </p>
        </div>
        <div class="choose-us-top-inner style-2">
            <ul>
                <li class="wow fadeInUp" data-wow-delay=".2s">Step One</li>
                <li class="wow fadeInUp" data-wow-delay=".4s">Step Two</li>
                <li class="wow fadeInUp" data-wow-delay=".6s">Step Three</li>
                <li class="wow fadeInUp" data-wow-delay=".8s">Step Four</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="choose-us-card-items style-2">
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon-5.png" alt="img">
                    </div>
                    <div class="content">
                        <h3>Bay a Domain</h3>
                        <p>
                            Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting
                            services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="choose-us-card-items style-2">
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon-6.png" alt="img">
                    </div>
                    <div class="content">
                        <h3>Find the Right Hosting</h3>
                        <p>
                            Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting
                            services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="choose-us-card-items style-2">
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon-7.png" alt="img">
                    </div>
                    <div class="content">
                        <h3>Add Professional Email</h3>
                        <p>
                            Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting
                            services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="choose-us-card-items style-2">
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon-8.png" alt="img">
                    </div>
                    <div class="content">
                        <h3>Boost Performance</h3>
                        <p>
                            Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting
                            services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonia Section Start -->
<section class="testimonial-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="style-border wow fadeInUp">Testimonials</span>
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Impressions & Feedback</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu
                Sed odio massa </p>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card-items-2">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <div class="client-info">
                            <div class="client-img bg-cover"
                                style="background-image: url('assets/img/testimonial/client-5.jpg');"></div>
                            <div class="content">
                                <h4>Ronald Richards</h4>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <p>
                            Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at
                            pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan felis sed.
                        </p>
                        <div class="client-bottom">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <img src="assets/img/testimonial/wpbeginner-dark.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items-2">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <div class="client-info">
                            <div class="client-img bg-cover"
                                style="background-image: url('assets/img/testimonial/client-6.jpg');"></div>
                            <div class="content">
                                <h4>Esther Howard</h4>
                                <span>President of Sales</span>
                            </div>
                        </div>
                        <p>
                            Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at
                            pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan felis sed.
                        </p>
                        <div class="client-bottom">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <img src="assets/img/testimonial/hostadvice-dark.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items-2">
                        <div class="icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <div class="client-info">
                            <div class="client-img bg-cover"
                                style="background-image: url('assets/img/testimonial/client-7.jpg');"></div>
                            <div class="content">
                                <h4>Courtney Henry</h4>
                                <span>Nursing Assistant</span>
                            </div>
                        </div>
                        <p>
                            Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at
                            pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan felis sed.
                        </p>
                        <div class="client-bottom">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <img src="assets/img/testimonial/capterra.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-click-text wow fadeInUp" data-wow-delay=".3s">
            <p>Explore more testimonials by</p>
            <a href="contact.html"> Click Here</a>
        </div>
    </div>
</section>

<!--<< Footer Section Start >>-->
@include('layouts.footer')