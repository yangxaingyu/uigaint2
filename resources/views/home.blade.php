
@extends('main.main')

@section('home')
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/plugins.css')}}" />
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/animate.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/blueprint.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/blueprint-select.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/cropper.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/ico-moon-fonts.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/magnific-popup.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/off-canvas.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/owl.carousel.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/responsive.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/sc-spacing.css')}}" />
<link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/style.css')}}" />


<div class="loader_first" style="display: none;">
    <div class="circular-spinner"></div>
</div>
<!--Preloader area End here-->


<!-- Banner Section Start -->
<div id="sc-banner" class="sc-banner banner-bg position-relative">
    <div class="container">
        <div class="banner-content text-center">
            <img class="banner-icon wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s" src="/storage/images/home/icon1.png" alt="icon-image" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: fadeInUp;">
            <h1 class="banner-title wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: fadeInUp;">
                Metaverse Web 3.0 Gaming Launcepad &amp; IGO
            </h1>
            <div class="description wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: none;">
                The next generation gaming ecosystem for IGOs and NFT
            </div>
            <a class="banner-btn wow fadeInUp black-shape-big" data-wow-delay="0.4s" data-wow-duration="0.7s" href="explore.html" style="visibility: hidden; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: none;">
                <span class="btn-text">Explore IGO</span>
                <span class="hover-shape1"></span>
                <span class="hover-shape2"></span>
                <span class="hover-shape3"></span>
            </a>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- About Section Start -->
<div class="gamfi-about-secion pb-80 md-pb-45">
    <div class="container">
        <div class="banner-slider-inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-delay: 0.2s; animation-name: none;">
            <div class="sc-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="1" data-margin="70" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="1500" data-dots="true" data-nav="false" data-nav-speed="true" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="true">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-3738px, 0px, 0px); transition: 1.5s; width: 9968px;">
                        <div class="owl-item cloned" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45  md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-3.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">Super Sidero</a></h3>
                                                <div class="dsc">PRICE (DDO) = 5.03 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise42,379.70 BUSD ( 83% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-4.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_3">
                                            <ul>
                                                <li class="days">-551<span>D</span></li>
                                                <li class="hours">17<span>H</span></li>
                                                <li class="minutes">18<span>M</span></li>
                                                <li class="seconds">21<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 120,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45  md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-4.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">Thetan Arena</a></h3>
                                                <div class="dsc">PRICE (DDO) = 1.30 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise20,673.70 BUSD ( 36% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-3.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_4">
                                            <ul>
                                                <li class="days">-550<span>D</span></li>
                                                <li class="hours">15<span>H</span></li>
                                                <li class="minutes">13<span>M</span></li>
                                                <li class="seconds">16<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 110,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45 md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-image.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">The Wasted Lands</a></h3>
                                                <div class="dsc">PRICE (DDO) = 0.13 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise38,999.70 BUSD ( 43% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-2.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_1">
                                            <ul>
                                                <li class="days">-557<span>D</span></li>
                                                <li class="hours">10<span>H</span></li>
                                                <li class="minutes">15<span>M</span></li>
                                                <li class="seconds">11<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 100,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45 md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-2.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">Gaia Everworld</a></h3>
                                                <div class="dsc">PRICE (DDO) = 0.45 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise20,789.70 BUSD ( 63% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-1.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_2">
                                            <ul>
                                                <li class="days">-554<span>D</span></li>
                                                <li class="hours">14<span>H</span></li>
                                                <li class="minutes">10<span>M</span></li>
                                                <li class="seconds">26<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 15,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45  md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-3.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">Super Sidero</a></h3>
                                                <div class="dsc">PRICE (DDO) = 5.03 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise42,379.70 BUSD ( 83% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-4.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_3">
                                            <ul>
                                                <li class="days">-551<span>D</span></li>
                                                <li class="hours">17<span>H</span></li>
                                                <li class="minutes">18<span>M</span></li>
                                                <li class="seconds">21<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 120,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45  md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-4.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">Thetan Arena</a></h3>
                                                <div class="dsc">PRICE (DDO) = 1.30 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise20,673.70 BUSD ( 36% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-3.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_4">
                                            <ul>
                                                <li class="days">-550<span>D</span></li>
                                                <li class="hours">15<span>H</span></li>
                                                <li class="minutes">13<span>M</span></li>
                                                <li class="seconds">16<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 110,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45 md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-image.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">The Wasted Lands</a></h3>
                                                <div class="dsc">PRICE (DDO) = 0.13 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise38,999.70 BUSD ( 43% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-2.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_1">
                                            <ul>
                                                <li class="days">-557<span>D</span></li>
                                                <li class="hours">10<span>H</span></li>
                                                <li class="minutes">15<span>M</span></li>
                                                <li class="seconds">11<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 100,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1176px; margin-right: 70px;">
                            <div class="game-price-item active-shape hover-shape-inner">
                                <div class="game-price-inner">
                                    <div class="total-price">
                                        <div class="price-inner d-flex mb-45 md-mb-20">
                                            <div class="image-icon">
                                                <a href="project-details.html">
                                                    <img src="/storage/images/home/ninga-2.png" alt="icon-image">
                                                </a>
                                            </div>
                                            <div class="price-details">
                                                <h3 class="mb-15"><a href="project-details.html">Gaia Everworld</a></h3>
                                                <div class="dsc">PRICE (DDO) = 0.45 BUSD</div>
                                            </div>
                                        </div>
                                        <div class="all-raise mb-10">
                                            Total Raise20,789.70 BUSD ( 63% )
                                        </div>
                                    </div>
                                    <div class="allocation-max text-center">
                                        <img src="/storage/images/home/icon-1.png" alt="icon-image">
                                        <div class="allocation">Allocation: 500 BUSD Max</div>
                                    </div>
                                    <div class="targeted-raise">
                                        <div class="all-raise mb-10">Sale End In</div>
                                        <div class="timer timer_2">
                                            <ul>
                                                <li class="days">-554<span>D</span></li>
                                                <li class="hours">14<span>H</span></li>
                                                <li class="minutes">10<span>M</span></li>
                                                <li class="seconds">26<span>S</span></li>
                                            </ul>
                                        </div>
                                        <div class="targeted-raise text-end">
                                            Targeted Raise 15,000 BUSD
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev"><i class="flaticon flaticon-left-arrow"></i></div>
                    <div class="owl-next"><i class="flaticon flaticon-right-arrow"></i></div>
                </div>
                <div class="owl-dots">
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
        </div>
        <div class="pt-130 md-pt-80 heading-area align-items-center d-flex justify-content-between wow fadeInUp mb-30" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
            <div class="sec-heading">
                <div class="sub-inner mb-15">
                    <span class="sub-title">3 easy steps</span>
                    <img class="heading-left-image" src="/storage/images/home/steps.png" alt="Steps-Image">
                </div>
                <h2 class="title">How to Participate</h2>
            </div>
            <div class="gamfi-btn-area">
                <ul>
                    <li>
                        <a class="view-more black-shape" href="kyc-process.html">
                            <span class="btn-text"> Verify KYC  </span>
                            <i class="icon-arrow_right"></i>
                            <span class="hover-shape1"></span>
                            <span class="hover-shape2"></span>
                            <span class="hover-shape3"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="participate-area row">
            <div class="col-lg-4">
                <div class="participate-item d-flex wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
                    <div class="number-image">
                        <img src="/storage/images/home/participate-image.png" alt="Participate-Image">
                    </div>
                    <div class="participate-info">
                        <h4 class="mb-10">Submit KYC</h4>
                        <p class="description">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="participate-item d-flex wow fadeInUp mr-30" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: none;">
                    <div class="number-image">
                        <img src="/storage/images/home/participate-image2.png" alt="Participate-Image">
                    </div>
                    <div class="participate-info">
                        <h4 class="mb-10">Verify Wallet</h4>
                        <p class="description">
                            Popular belief Ipsum is not simply random text. It has roots in a piece of classical
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="participate-item d-flex wow fadeInUp mr-20" data-wow-delay="0.4s" data-wow-duration="0.6s" style="visibility: hidden; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: none;">
                    <div class="number-image">
                        <img src="/storage/images/home/participate-image3.png" alt="Participate-Image">
                    </div>
                    <div class="participate-info">
                        <h4 class="mb-10">Start Staking</h4>
                        <p class="description">
                            Belief norem Isum is not simply random text. It has roots in a piece of classical
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Project Section Start -->
<div class="gamfi-project-section main-project-area">
    <div class="container">
        <div class="sec-inner align-items-center d-flex justify-content-between">
            <div class="sec-heading">
                <div class="sub-inner mb-15">
                    <span class="sub-title">Next Projects</span>
                    <img class="heading-left-image" src="/storage/images/home/steps.png" alt="Steps-Image">
                </div>
                <h2 class="title">Upcoming IGO</h2>
            </div>
            <div class="gamfi-btn-area">
                <ul>
                    <li>
                        <a class="readon2 black-shape" href="calendar.html">
                            <i class="icon-calendar"></i>
                            <span class="btn-text">Calendar</span>
                            <span class="hover-shape1"></span>
                            <span class="hover-shape2"></span>
                            <span class="hover-shape3"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="project-item hover-shape-border">
                    <div class="project-info d-flex">
                        <a href="/project-details">
                            <img src="/storage/images/home/project-image.png" alt="Project-Image">
                        </a>
                        <div class="project-auother">
                            <h4 class="mb-10"><a href="project-details.html">Galaxy War</a></h4>
                            <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header d-flex justify-content-between">
                            <div class="heading-title">
                                <h4>08 Days Left</h4>
                            </div>
                            <div class="project-icon">
                                <img src="/storage/images/home/project-single-image.png" alt="Project-Image">
                            </div>
                        </div>
                        <div class="project-media">
                            <ul class="project-listing">
                                <li>Min allocation <span>0.33 BUSD</span></li>
                                <li>Max allocation <span>900.00 BUSD</span></li>
                                <li>Targeted raise <span>200,000 BUSD</span></li>
                                <li>Access type <span>Public</span></li>
                                <li class="social-share">
                                    Social
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-discord"></i></a></li>
                                        <li><a href="#"><i class="icon-medium"></i></a></li>
                                        <li><a href="#"><i class="icon-world"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project-item hover-shape-border">
                    <div class="project-info d-flex">
                        <a href="project-details.html">
                            <img src="/storage/images/home/project-image2.png" alt="Project-Image">
                        </a>
                        <div class="project-auother">
                            <h4 class="mb-10"><a href="project-details.html">Super Sidero</a></h4>
                            <div class="dsc">PRICE (SSC) = 0.13 BUSD</div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header d-flex justify-content-between">
                            <div class="heading-title">
                                <h4>03 Days Left</h4>
                            </div>
                            <div class="project-icon">
                                <img src="/storage/images/home/project-single-image2.png" alt="Project-Image">
                            </div>
                        </div>

                        <div class="project-media">
                            <ul class="project-listing">
                                <li>Min allocation <span>0.89 BUSD</span></li>
                                <li>Max allocation <span>300.00 BUSD</span></li>
                                <li>Targeted raise <span>899,900 BUSD</span></li>
                                <li>Access type <span>Public</span></li>
                                <li>
                                    Social
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-discord"></i></a></li>
                                        <li><a href="#"><i class="icon-medium"></i></a></li>
                                        <li><a href="#"><i class="icon-world"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project-item hover-shape-border">
                    <div class="project-info d-flex">
                        <a href="project-details.html">
                            <img src="/storage/images/home/project-image3.png" alt="Project-Image">
                        </a>
                        <div class="project-auother">
                            <h4 class="mb-10"><a href="project-details.html">Meta World</a></h4>
                            <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header d-flex justify-content-between">
                            <div class="heading-title">
                                <h4>05 Days Left</h4>
                            </div>
                            <div class="project-icon">
                                <img src="/storage/images/home/project-single-image3.png" alt="Project-Image">
                            </div>
                        </div>

                        <div class="project-media">
                            <ul class="project-listing">
                                <li>Min allocation <span>2.25 BUSD</span></li>
                                <li>Max allocation <span>1000.00 BUSD</span></li>
                                <li>Targeted raise <span>50,00,000 BUSD</span></li>
                                <li>Access type <span>Public</span></li>
                                <li>
                                    Social
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-discord"></i></a></li>
                                        <li><a href="#"><i class="icon-medium"></i></a></li>
                                        <li><a href="#"><i class="icon-world"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project-item hover-shape-border">
                    <div class="project-info d-flex">
                        <a href="project-details.html">
                            <img src="/storage/images/home/project-image4.png" alt="Project-Image">
                        </a>
                        <div class="project-auother">
                            <h4 class="mb-10"><a href="project-details.html">Fisrt Survivor</a></h4>
                            <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                        </div>
                    </div>
                    <div class="project-content hover-shape-border">
                        <div class="project-header d-flex justify-content-between">
                            <div class="heading-title">
                                <h4>12 Days Left</h4>
                            </div>
                            <div class="project-icon">
                                <img src="/storage/images/home/project-single-image4.png" alt="Project-Image">
                            </div>
                        </div>
                        <div class="project-media">
                            <ul class="project-listing">
                                <li>Min allocation <span>0.59 BUSD</span></li>
                                <li>Max allocation <span>399.00 BUSD</span></li>
                                <li>Targeted raise <span>500,000 BUSD</span></li>
                                <li>Access type <span>Public</span></li>
                                <li>
                                    Social
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-discord"></i></a></li>
                                        <li><a href="#"><i class="icon-medium"></i></a></li>
                                        <li><a href="#"><i class="icon-world"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project-item hover-shape-border">
                    <div class="project-info d-flex">
                        <a href="project-details.html">
                            <img src="/storage/images/home/project-image5.png" alt="Project-Image">
                        </a>
                        <div class="project-auother">
                            <h4 class="mb-10"><a href="project-details.html">Cryowar Two</a></h4>
                            <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                        </div>
                    </div>
                    <div class="project-content hover-shape-border">
                        <div class="project-header d-flex justify-content-between">
                            <div class="heading-title">
                                <h4>12 Days Left</h4>
                            </div>
                            <div class="project-icon">
                                <img src="/storage/images/home/project-single-image5.png" alt="Project-Image">
                            </div>
                        </div>
                        <div class="project-media">
                            <ul class="project-listing">
                                <li>Min allocation <span>0.66 BUSD</span></li>
                                <li>Max allocation <span>800.00 BUSD</span></li>
                                <li>Targeted raise <span>999,000 BUSD</span></li>
                                <li>Access type <span>Public</span></li>
                                <li>
                                    Social
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-discord"></i></a></li>
                                        <li><a href="#"><i class="icon-medium"></i></a></li>
                                        <li><a href="#"><i class="icon-world"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project-item hover-shape-border">
                    <div class="project-info d-flex">
                        <a href="project-details.html">
                            <img src="/storage/images/home/project-image6.png" alt="Project-Image">
                        </a>
                        <div class="project-auother">
                            <h4 class="mb-10"><a href="project-details.html">Gaia Everworld</a></h4>
                            <div class="dsc">PRICE (GAC) = 0.13 BUSD</div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header d-flex justify-content-between">
                            <div class="heading-title">
                                <h4>18 Days Left</h4>
                            </div>
                            <div class="project-icon">
                                <img src="/storage/images/home/project-single-image6.png" alt="Project-Image">
                            </div>
                        </div>

                        <div class="project-media">
                            <ul class="project-listing">
                                <li>Min allocation <span>0.25 BUSD</span></li>
                                <li>Max allocation <span>500.00 BUSD</span></li>
                                <li>Targeted raise <span>888,000 BUSD</span></li>
                                <li>Access type <span>Public</span></li>
                                <li>
                                    Social
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-discord"></i></a></li>
                                        <li><a href="#"><i class="icon-medium"></i></a></li>
                                        <li><a href="#"><i class="icon-world"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Section End -->

<!-- Previous Section Start -->
<div class="gamfi-previous-section pb-90 md-pb-50">
    <div class="container">
        <div class="sec-inner align-items-center d-flex justify-content-between wow fadeInUp mb-50" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
            <div class="sec-heading">
                <div class="sub-inner mb-15">
                    <span class="sub-title">Complete Projects</span>
                    <img class="heading-left-image" src="/storage/images/home/steps.png" alt="Steps-Image">
                </div>
                <h2 class="title mb-0 xs-pb-20">Previous IGO</h2>
            </div>
            <div class="gamfi-btn-area">
                <ul>
                    <li>
                        <a class="view-more black-shape" href="project.html">
                            <span class="btn-text">View More</span>
                            <i class="icon-arrow_right"></i>
                            <span class="hover-shape1"></span>
                            <span class="hover-shape2"></span>
                            <span class="hover-shape3"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center" data-wow-delay="0.2s" data-wow-duration="0.4s">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: none;">
                <div class="previous-mainmenu mb-15">
                    <ul class="menu-list">
                        <li class="list1">Project name</li>
                        <li class="list2">Chain</li>
                        <li class="list3">Launched</li>
                        <li class="list4">Total Raise</li>
                        <li class="list5">Progress</li>
                    </ul>
                </div>
                <a href="project-details.html">
                    <div class="previous-item hover-shape-border hover-shape-inner">
                        <div class="previous-gaming">
                            <div class="previous-image">
                                <img src="/storage/images/home/privius-image.png" alt="Previous-Image">
                            </div>
                            <div class="previous-price">
                                <h4 class="mb-10">KyberDyne</h4>
                                <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                            </div>
                        </div>
                        <div class="previous-chaining">
                            <img src="/storage/images/home/previous-image.png" alt="Chain-Image">
                            <span>5 Hours ago</span>
                        </div>
                        <div class="previous-raise">
                            <span>100,000 BUSD (100%)</span>
                            <div class="progress-inner">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                        <span class="border-shadow shadow-1"></span>
                        <span class="border-shadow shadow-2"></span>
                        <span class="border-shadow shadow-3"></span>
                        <span class="border-shadow shadow-4"></span>
                        <span class="hover-shape-bg hover_shape1"></span>
                        <span class="hover-shape-bg hover_shape2"></span>
                        <span class="hover-shape-bg hover_shape3"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s" style="visibility: hidden; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: none;">
                <a href="project-details.html">
                    <div class="previous-item hover-shape-border hover-shape-inner">
                        <div class="previous-gaming">
                            <div class="previous-image">
                                <img src="/storage/images/home/privius-image2.png" alt="Previous-Image">
                            </div>
                            <div class="previous-price">
                                <h4 class="mb-10">Thetan Arena</h4>
                                <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                            </div>
                        </div>
                        <div class="previous-chaining">
                            <img src="/storage/images/home/previous-image2.png" alt="Chain-Image">
                            <span>1 days ago</span>
                        </div>
                        <div class="previous-raise">
                            <span>265,000 BUSD (73%)</span>
                            <div class="progress-inner">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%"></div>
                                </div>
                            </div>
                        </div>
                        <span class="border-shadow shadow-1"></span>
                        <span class="border-shadow shadow-2"></span>
                        <span class="border-shadow shadow-3"></span>
                        <span class="border-shadow shadow-4"></span>
                        <span class="hover-shape-bg hover_shape1"></span>
                        <span class="hover-shape-bg hover_shape2"></span>
                        <span class="hover-shape-bg hover_shape3"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: none;">
                <a href="project-details.html">
                    <div class="previous-item hover-shape-border hover-shape-inner">
                        <div class="previous-gaming">
                            <div class="previous-image">
                                <img src="/storage/images/home/privius-image3.png" alt="Previous-Image">
                            </div>
                            <div class="previous-price">
                                <h4 class="mb-10">Galaxy War</h4>
                                <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                            </div>
                        </div>
                        <div class="previous-chaining">
                            <img src="/storage/images/home/previous-image3.png" alt="Chain-Image">
                            <span>3 Day Ago</span>
                        </div>
                        <div class="previous-raise">
                            <span>510,000 BUSD (98%)</span>
                            <div class="progress-inner">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%"></div>
                                </div>
                            </div>
                        </div>
                        <span class="border-shadow shadow-1"></span>
                        <span class="border-shadow shadow-2"></span>
                        <span class="border-shadow shadow-3"></span>
                        <span class="border-shadow shadow-4"></span>
                        <span class="hover-shape-bg hover_shape1"></span>
                        <span class="hover-shape-bg hover_shape2"></span>
                        <span class="hover-shape-bg hover_shape3"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s" style="visibility: hidden; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: none;">
                <a href="project-details.html">
                    <div class="previous-item hover-shape-border hover-shape-inner">
                        <div class="previous-gaming">
                            <div class="previous-image">
                                <img src="/storage/images/home/privius-image4.png" alt="Previous-Image">
                            </div>
                            <div class="previous-price">
                                <h4 class="mb-10">KingdomX</h4>
                                <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                            </div>
                        </div>
                        <div class="previous-chaining">
                            <img src="/storage/images/home/previous-image4.png" alt="Chain-Image">
                            <span>5 Days Ago</span>
                        </div>
                        <div class="previous-raise">
                            <span>100,000 BUSD (100%)</span>
                            <div class="progress-inner">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                        <span class="border-shadow shadow-1"></span>
                        <span class="border-shadow shadow-2"></span>
                        <span class="border-shadow shadow-3"></span>
                        <span class="border-shadow shadow-4"></span>
                        <span class="hover-shape-bg hover_shape1"></span>
                        <span class="hover-shape-bg hover_shape2"></span>
                        <span class="hover-shape-bg hover_shape3"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.9s" style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: none;">
                <a href="project-details.html">
                    <div class="previous-item hover-shape-border hover-shape-inner">
                        <div class="previous-gaming">
                            <div class="previous-image">
                                <img src="/storage/images/home/privius-image5.png" alt="Previous-Image">
                            </div>
                            <div class="previous-price">
                                <h4 class="mb-10">Cyber City</h4>
                                <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                            </div>
                        </div>
                        <div class="previous-chaining">
                            <img src="/storage/images/home/previous-image5.png" alt="Chain-Image">
                            <span>5 Day Agos</span>
                        </div>
                        <div class="previous-raise">
                            <span>500,000 BUSD (86%)</span>
                            <div class="progress-inner">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                </div>
                            </div>
                        </div>
                        <span class="border-shadow shadow-1"></span>
                        <span class="border-shadow shadow-2"></span>
                        <span class="border-shadow shadow-3"></span>
                        <span class="border-shadow shadow-4"></span>
                        <span class="hover-shape-bg hover_shape1"></span>
                        <span class="hover-shape-bg hover_shape2"></span>
                        <span class="hover-shape-bg hover_shape3"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Previous Section End -->

<!-- Tokenomics Section Start -->
<div class="gamfi-tokenomics-section tokenomics-left-right-shape pb-115 pt-115 md-pt-75 md-pb-45">
    <div class="container">
        <div class="sec-heading wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
            <div class="sub-inner mb-15">
                <span class="sub-title">statistics</span>
                <img class="heading-left-image" src="/storage/images/home/steps.png" alt="Steps-Image">
            </div>
            <h2 class="title">Tokenomics</h2>
        </div>

        <div class="v1_tokenomics_content_sect wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
            <div class="v1_tokenomics_content_list_sect">
                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_1">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Team</h4>
                        <h5><span class="counter">7.5</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress1">

                    </div>
                </div>

                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_2">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Staking</h4>
                        <h5><span class="counter">9.50</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress2">

                    </div>
                </div>

                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_3">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Advisors</h4>
                        <h5><span class="counter">10.00</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress3">

                    </div>
                </div>

                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_4">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Liquidity</h4>
                        <h5><span class="counter">12.00</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress4">

                    </div>
                </div>

                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_5">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Ecosystem</h4>
                        <h5><span class="counter">16.33</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress5">

                    </div>
                </div>

                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_6">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Marketing</h4>
                        <h5><span class="counter">18.00</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress6">

                    </div>
                </div>

                <div class="v1_tokenomics_content_list v1_tokenomics_content_list_7">
                    <div class="v1_tokenomics_content_list_text">
                        <h4>Private Sale</h4>
                        <h5><span class="counter">30.00</span>%</h5>
                    </div>
                    <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress7">

                    </div>
                </div>
            </div>
        </div>

        <div class="tokenomics-counter wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: none;">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-30">
                    <div class="counter-info">
                        <h4 class="counter-number mb-6"><span class="counter">386</span></h4>
                        <h5>Funded Projects</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-30">
                    <div class="counter-info">
                        <h4 class="counter-number mb-6"><span class="counter">486</span></h4>
                        <h5>Unique Participants</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-30">
                    <div class="counter-info">
                        <h4 class="counter-number mb-6">$<span class="counter">9</span>M+</h4>
                        <h5>Raised Capital</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-30">
                    <div class="counter-info">
                        <h4 class="counter-number mb-6">$<span class="counter">18</span>M+</h4>
                        <h5>Initial Market Cap</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="gamfi_tokenomics_corner_imgs">
                    <span class="gamfi_tokenomics_corner_img1">
                        <img src="/storage/images/home/RoadMapV2Fram.png" alt="" class="img-fluid">
                    </span>
            <span class="gamfi_tokenomics_corner_img2">
                        <img src="/storage/images/home/RoadMapV2Frame2.png" alt="" class="img-fluid">
                    </span>
        </div>
    </div>
</div>
<!-- Tokenomics Section End -->

<!-- Team Section Start -->
<div class="gamfi-team-section pt-115 pb-85 md-pt-75 md-pb-42">
    <div class="container">
        <div class="sec-heading text-center mb-55">
            <div class="sub-inner  mb-15">
                <img class="heading-left-image" src="/storage/images/home/steps2.png" alt="Steps-Image">
                <span class="ml-10 mr-10 sub-title">Team Members</span>
                <img class="heading-right-image" src="/storage/images/home/steps.png" alt="Steps-Image">
            </div>
            <h2 class="title">Meet The Crew</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Berneice Tran</a></h4>
                    <div class="dsc">Director</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image2.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Genaro Nadel</a></h4>
                    <div class="dsc">VP of Engineering</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image3.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Lynnette Wilkes</a></h4>
                    <div class="dsc">Fullstack Developer</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image4.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Claudia Hicks</a></h4>
                    <div class="dsc">Sr. Developer</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image5.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Louis Baker</a></h4>
                    <div class="dsc">Software Engineer</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image6.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Nathan Bean</a></h4>
                    <div class="dsc">Sr. UI Designer</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image7.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">R. Hawley</a></h4>
                    <div class="dsc">Jr. UI/UX Designer</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team-item text-center active-shape">
                    <img src="/storage/images/home/team-image8.png" alt="Team-image">
                    <h4 class="team-title mb-8"><a href="teamdetails.html">Pedro Carrera</a></h4>
                    <div class="dsc">Graphic Designer</div>
                    <ul class="team-icon-list">
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->

<!-- Partner Section Start -->
<div class="gamfi-partner-section pb-110 md-pb-80">
    <div class="container">
        <div class="sec-heading text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
            <div class="sub-inner mb-55">
                <img class="heading-right-image" src="/storage/images/home/steps2.png" alt="Steps-Image">
                <span class="sub-title white-color">Our partners</span>
                <img class="heading-left-image" src="/storage/images/home/steps.png" alt="Steps-Image">
            </div>
        </div>
        <div class="gamfi-partner-inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: hidden; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: none;">
            <div class="partner-image">
                <a href="#">
                    <img src="/storage/images/home/partner-image.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image2.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image3.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image4.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image5.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image6.png" alt="Partner-Image">
                </a>
            </div>
            <div class="partner-image">
                <a href="#">
                    <img src="/storage/images/home/partner-image.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image2.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image3.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image4.png" alt="Galaxy WarPartner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image5.png" alt="Partner-Image">
                </a>
                <a href="#">
                    <img src="/storage/images/home/partner-image6.png" alt="Partner-Image">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Partner Section End -->

<!-- Footer Section Start -->
<Footer></Footer>
<!-- Footer Section End -->

<!-- Modal Section Start-->
{{--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h4 class="modals-title  mb-0" id="exampleModalLabel">Connect Wallet</h4>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                    <i class="icon-x"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <p class="mb-20">Please select a wallet to connect to this marketplace</p>--}}
{{--                <div class="connect-section">--}}
{{--                    <ul class="heading-list">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="connect-meta">--}}
{{--                                        <span>--}}
{{--                                            <img src="/storage/images/home/meta-mask.png" alt="Meta-mask-Image">--}}
{{--                                        </span>--}}
{{--                                MetaMask--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                        <span>--}}
{{--                                            <img src="/storage/images/home/coinbase.png" alt="Coinbase-Image">--}}
{{--                                        </span>--}}
{{--                                Coinbase--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                        <span>--}}
{{--                                            <img src="/storage/images/home/trust.png" alt="Trust-Image">--}}
{{--                                        </span>--}}
{{--                                Trust Wallet--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                        <span>--}}
{{--                                            <img src="/storage/images/home/wallet.png" alt="Wallet-Image">--}}
{{--                                        </span>--}}
{{--                                WalletConnect--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <p>--}}
{{--                    By connecting your wallet, you agree to our--}}
{{--                    <a href="#">--}}
{{--                        <span class="modal-title">Terms of Service </span>--}}
{{--                    </a>--}}
{{--                    and our--}}
{{--                    <a href="#">--}}
{{--                        <span class="modal-title"> Privacy Policy</span>--}}
{{--                    </a>.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Modal Section End-->

<!-- Modal Section Start-->
<div class="modal fade" id="download-metamask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modals-title  mb-0" id="exampleModalLabel">Connect Wallet</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="icon-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-20">Please download &amp; install metamask extension!</p>
                <div class="connect-section">
                    <ul class="heading-list">
                        <li>
                            <a target="_blank" href="https://metamask.io/download/">
                                        <span>
                                            <img src="/storage/images/home/meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                MetaMask
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="{{\App\Server\Helper::assets('/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/detector-exec.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/hook-exec.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/imagesloaded.pkgd.min')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/inspector.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/jquery.counterup.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/jquery.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/main.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/metamask.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/metamaskhandler.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/modernizr-2.8.3.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/owl.carousel.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/plugins.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/time-counter.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/waypoints.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/web3.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/wow.min.js')}}"></script>

@stop
