@extends('main.main')

@section('home')
    <style>
        body .demo-class .layui-layer-title {background:#272642; color:#fff; border: none;}
        body .demo-class .layui-layer-content {background-color: #443d6c; color: #fff;}
        body .demo-class .layui-layer-btn {background-color: #443d6c;}
        body .demo-class .layui-layer-btn a {height: 33px;line-height: 33px; font-family: "Russo One", sans-serif; background:rgba(255, 255, 255, 0.2); color: #fff; border: 0;}
    </style>

    <!--Preloader area start here-->
    <div class="loader_first" style="display: none;">
        <div class="circular-spinner"></div>
    </div>
    <!--Preloader area End here-->

    <div class="gafi_body" style="margin-bottom: 0;">
        <div class="gamfi_header_v2">
            <div class="gamfi_v2_hero_sect">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gamfi_v2_hero_left">
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: fadeInUp;">Multichain DeFi Web
                                    <span>3.0</span> Ecosystem</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeInUp;">The next generation gaming ecosystem for IGOs and NFT market</p>
                                <div class="gamfi_v2_hero_btns wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.6s; animation-name: fadeInUp;">
                                    <a href="project.html" class="readon white-btn hover-shape view-project-btn">
                                        <span class="btn-text">VIEW Projects</span>
                                        <span class="hover-shape1"></span>
                                        <span class="hover-shape2"></span>
                                        <span class="hover-shape3"></span>
                                    </a>
                                    <a class="readon black-shape apply-project-btn" href="igo-apply.html">
                                        <span class="btn-text">Apply Project</span>
                                        <span class="hover-shape1"></span>
                                        <span class="hover-shape2"></span>
                                        <span class="hover-shape3"></span>
                                    </a>
                                </div>
                                <div class="buy-token-logos">
                                    <h6>BUY TOKEN ON</h6>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="/storage/images/home_v2/buyTokenlogo1.png" alt="logo" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/storage/images/home_v2/buyTokenlogo2.png" alt="logo" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/storage/images/home_v2/buyTokenlogo3.png" alt="logo" class="img-fluid"></a>
                                        </li>
                                        <li class="m-0">
                                            <a href="#"><img src="/storage/images/home_v2/buyTokenlogo4.png" alt="logo" class="img-fluid"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gamfi_v2_hero_right">
                                <div class="gamfi_v2_hero_rocket">
                                    <img src="/storage/images/home_v2/rocket-front-color.png" alt="Rocket Img" class="Img-fluid RedRocketImg wow fadeInUp animated" style="visibility: visible; animation-name: RocketLaunch;">
                                    <span class="rocketshadow1"><img src="/storage/images/home_v2/rocketStar.svg" alt="" class="img-fluid"></span>
                                    <span class="rocketshadow2"><img src="/storage/images/home_v2/rocketStar.svg" alt="" class="img-fluid"></span>
                                    <span class="rocketshadow3"><img src="/storage/images/home_v2/rocketStar.svg" alt="" class="img-fluid"></span>
                                    <span class="rocketshadow4"><img src="/storage/images/home_v2/rocketStar.svg" alt="" class="img-fluid"></span>
                                    <span class="rocketshadow5"><img src="/storage/images/home_v2/rocketStar.svg" alt="" class="img-fluid"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="market_cap_sect">
            <div class="container">
                <div class="market_cap_all_content">
                    <div class="market_cap_content">
                        <h2>Market Cap</h2>
                        <h3 class="counter-number">$<span class="counter">490.88</span>M</h3>
                    </div>
                    <div class="market_cap_content">
                        <h2>TVL</h2>
                        <h3 class="counter-number">$<span class="counter">38.60</span>M</h3>
                    </div>
                    <div class="market_cap_content">
                        <h2>Price</h2>
                        <h3 class="counter-number">$<span class="counter">0.009</span></h3>
                    </div>
                    <div class="market_cap_content">
                        <h2>Fund Raised</h2>
                        <h3 class="counter-number">$<span class="counter">160</span>M</h3>
                    </div>
                </div>
            </div>
            <span class="red-border-gradient"></span>
            <span class="green-border-gradient"></span>
        </div>

        <!-- Project Section Start -->
        <div class="gamfi-project-section project_pools_sect main-project-area pb-0">
            <div class="container">
                <div class="sec-inner align-items-center d-flex justify-content-between flex-wrap mb-30">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">EXPLORE</span>
                            <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title">Project POOLS</h2>
                    </div>
                    <div class="gamfi-btn-area project_v2_tab_btns">
                        <ul>
                            <li class="project_v2_tab_links m-0 active" onclick="openProject(event, 'ProectV2_OnGoing')" id="OpenProject">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">On going</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>

                            <li class="project_v2_tab_links" onclick="openProject(event, 'ProectV2_UPCOMING')">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">UPCOMING</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>

                            <li class="project_v2_tab_links" onclick="openProject(event, 'ProectV2_ENDED')">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">ENDED</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="project_v2_tab_content_sect">
                    <div id="ProectV2_OnGoing" class="project_v2_tab_content animate_opacity" style="display: block;">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Galaxy War</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer timer_1">
                                                        <ul>
                                                            <li class="days">-580<span>D</span></li>
                                                            <li class="hours">11<span>H</span></li>
                                                            <li class="minutes">20<span>M</span></li>
                                                            <li class="seconds">25<span>S</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.33 BUSD</span></li>
                                                <li>Max allocation <span>900.00 BUSD</span></li>
                                                <li>Targeted raise <span>200,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInRight;">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image2.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Super Sidero</a></h4>
                                            <div class="dsc">PRICE (SSC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer timer_2">
                                                        <ul>
                                                            <li class="days">-577<span>D</span></li>
                                                            <li class="hours">15<span>H</span></li>
                                                            <li class="minutes">15<span>M</span></li>
                                                            <li class="seconds">40<span>S</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image2.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.89 BUSD</span></li>
                                                <li>Max allocation <span>300.00 BUSD</span></li>
                                                <li>Targeted raise <span>899,900 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image3.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Meta World</a></h4>
                                            <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer timer_3">
                                                        <ul>
                                                            <li class="days">-574<span>D</span></li>
                                                            <li class="hours">18<span>H</span></li>
                                                            <li class="minutes">23<span>M</span></li>
                                                            <li class="seconds">35<span>S</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image3.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>2.25 BUSD</span></li>
                                                <li>Max allocation <span>1000.00 BUSD</span></li>
                                                <li>Targeted raise <span>50,00,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInRight;">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image4.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Fisrt Survivor</a></h4>
                                            <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer timer_4">
                                                        <ul>
                                                            <li class="days">-573<span>D</span></li>
                                                            <li class="hours">16<span>H</span></li>
                                                            <li class="minutes">18<span>M</span></li>
                                                            <li class="seconds">30<span>S</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image4.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.59 BUSD</span></li>
                                                <li>Max allocation <span>399.00 BUSD</span></li>
                                                <li>Targeted raise <span>500,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInRight;">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image5.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Cryowar Two</a></h4>
                                            <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer timer_5">
                                                        <ul>
                                                            <li class="days">-575<span>D</span></li>
                                                            <li class="hours">20<span>H</span></li>
                                                            <li class="minutes">40<span>M</span></li>
                                                            <li class="seconds">59<span>S</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image5.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.66 BUSD</span></li>
                                                <li>Max allocation <span>800.00 BUSD</span></li>
                                                <li>Targeted raise <span>999,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: fadeInRight;">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image6.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Gaia Everworld</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer timer_6">
                                                        <ul>
                                                            <li class="days">-575<span>D</span></li>
                                                            <li class="hours">20<span>H</span></li>
                                                            <li class="minutes">40<span>M</span></li>
                                                            <li class="seconds">59<span>S</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image6.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.25 BUSD</span></li>
                                                <li>Max allocation <span>500.00 BUSD</span></li>
                                                <li>Targeted raise <span>888,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="ProectV2_UPCOMING" class="project_v2_tab_content animate_opacity" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image2.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KyberDyne</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>08 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.33 BUSD</span></li>
                                                <li>Max allocation <span>900.00 BUSD</span></li>
                                                <li>Targeted raise <span>200,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image7.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Thetan Arena</a></h4>
                                            <div class="dsc">PRICE (SSC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>12 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image2.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.89 BUSD</span></li>
                                                <li>Max allocation <span>300.00 BUSD</span></li>
                                                <li>Targeted raise <span>899,900 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image3.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Galaxy War</a></h4>
                                            <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>15 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image3.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>2.25 BUSD</span></li>
                                                <li>Max allocation <span>1000.00 BUSD</span></li>
                                                <li>Targeted raise <span>50,00,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KingdomX</a></h4>
                                            <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>20 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image4.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.59 BUSD</span></li>
                                                <li>Max allocation <span>399.00 BUSD</span></li>
                                                <li>Targeted raise <span>500,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image5.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Cyber City</a></h4>
                                            <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>25 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image5.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.66 BUSD</span></li>
                                                <li>Max allocation <span>800.00 BUSD</span></li>
                                                <li>Targeted raise <span>999,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Gaia Everworld</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>30 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image6.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.25 BUSD</span></li>
                                                <li>Max allocation <span>500.00 BUSD</span></li>
                                                <li>Targeted raise <span>888,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="ProectV2_ENDED" class="project_v2_tab_content animate_opacity" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image10.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KyberDyne</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>07 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.33 BUSD</span></li>
                                                <li>Max allocation <span>900.00 BUSD</span></li>
                                                <li>Targeted raise <span>200,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image5.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Thetan Arena</a></h4>
                                            <div class="dsc">PRICE (SSC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>08 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image2.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.89 BUSD</span></li>
                                                <li>Max allocation <span>300.00 BUSD</span></li>
                                                <li>Targeted raise <span>899,900 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image4.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Galaxy War</a></h4>
                                            <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>10 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image3.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>2.25 BUSD</span></li>
                                                <li>Max allocation <span>1000.00 BUSD</span></li>
                                                <li>Targeted raise <span>50,00,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image2.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KingdomX</a></h4>
                                            <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>14 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image4.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.59 BUSD</span></li>
                                                <li>Max allocation <span>399.00 BUSD</span></li>
                                                <li>Targeted raise <span>500,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Cyber City</a></h4>
                                            <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>17 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image5.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.66 BUSD</span></li>
                                                <li>Max allocation <span>800.00 BUSD</span></li>
                                                <li>Targeted raise <span>999,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image3.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Gaia Everworld</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>30 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image6.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.25 BUSD</span></li>
                                                <li>Max allocation <span>500.00 BUSD</span></li>
                                                <li>Targeted raise <span>888,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
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
            </div>
        </div>

        <!-- New Start -->
        <div id="app" class="gamfi-project-section project_pools_sect main-project-area pb-0">
            <div class="container">
                <div class="sec-inner align-items-center d-flex justify-content-between flex-wrap mb-30">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">EXPLORE</span>
                            <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title">Project POOLS</h2>
                    </div>
                    <div class="gamfi-btn-area project_v2_tab_btns">
                        <ul>
                            <li class="project_v2_tab_links m-0 active" onclick="openProject(event, 'ProectV2_OnGoing')" id="OpenProject">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">On going</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>

                            <li class="project_v2_tab_links" onclick="openProject(event, 'ProectV2_UPCOMING')">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">UPCOMING</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>

                            <li class="project_v2_tab_links" onclick="openProject(event, 'ProectV2_ENDED')">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">ENDED</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="project_v2_tab_content_sect">
                    <div id="ProectV2_OnGoing"
                         class="project_v2_tab_content animate_opacity"
                         style="display: block;margin: 0 10px;">
                        <div v-for="item in mining_pools" :key="item.pool_id"
                             class="row align-items-center"
                             style="border: 2px #3e3f4e solid;border-top: 4px #722140 solid; margin-bottom: 30px;">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item hover-shape-border" style="padding-bottom: 20px; margin-bottom: 0;">
                                    <div class="project-header d-flex justify-content-between">
                                        <div class="project-icon" style="top: 0;">
                                            <img src="/storage/images/home/project-single-image.png" alt="Project-Image">
                                        </div>
                                        <div class="heading-title" style="margin-bottom: 0;">
                                            <h3>@{{ item.pool_name }}</h3>
                                        </div>
                                    </div>

                                    <div class="project-desc desc-line2" style="margin-bottom: 20px; height: 55px;">
                                        @{{ item.pool_description }}
                                    </div>

                                    <div class="project-content" style="margin-bottom: 15px;">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="price-counter">
                                                    <div class="timer" v-html="item.countdown_str">
{{--                                                        <ul>--}}
{{--                                                            <li class="days">7<span>D</span></li>--}}
{{--                                                            <li class="hours">15<span>H</span></li>--}}
{{--                                                            <li class="minutes">15<span>M</span></li>--}}
{{--                                                            <li class="seconds">40<span>S</span></li>--}}
{{--                                                        </ul>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image2.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing" style="padding-bottom: 36px;">
                                                <li>
                                                    Total reward
                                                    <span>@{{ item.total_stake_limit }} @{{ item.reward_coin_name }}</span>
                                                </li>
                                                <li>
                                                    Pledge period <span>@{{ item.lock_period_days }} Days</span></li>
                                                <li>
                                                    End Time <span>@{{ item.end_time }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6"
                                 v-for="support_coin in item.supported_coins"
                                 style="padding-top: 15px; padding-bottom: 15px;">
                                <div v-if="!support_coin.is_flip" class="project-item hover-shape-border" style="padding-bottom: 20px; margin-bottom: 0;">
                                    <div class="project-content">
                                        <div class="project-header d-flex" style="justify-content: center;">
                                            <div class="heading-title" style="padding-bottom: 10px;margin-bottom: 0;">
                                                <h3>@{{ support_coin.support_coin_name }}</h3>
                                            </div>
                                        </div>

                                        <div class="project-icon text-center" style="padding-bottom: 15px;">
                                            <img style="width: 50px; height: 50px;" src="/storage/images/home/project-single-image2.png" alt="Project-Image">
                                        </div>

                                        <div class="project-desc" style="padding-bottom: 15px;text-align: center;">
                                            Stake @{{ support_coin.support_coin_name }} to earn @{{ item.reward_coin_name }}
                                        </div>

                                        <div class="project-media" style="padding-bottom: 30px;">
                                            <ul class="project-listing">
                                                <li>APR <span>5 %</span></li>
                                                <li>Min pledge <span>0.89 BUSD</span></li>
                                                <li>Max pledge <span>300.00 BUSD</span></li>
                                            </ul>
                                        </div>

                                        <div class="item-button" >
                                            <div @click="support_coin.is_flip = true"
                                                 class="theme-btn blue" style="padding: 12px 50px;cursor: pointer;">
                                                <span>Pledge</span>
                                                <div class="hover-shape1"></div>
                                                <div class="hover-shape2"></div>
                                                <div class="hover-shape3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                                <div v-else class="project-item active-shape hover-shape-inner" style="padding-bottom: 20px; margin-bottom: 0;">
                                    <div v-if="false" class="project-content">
                                        <div class="project-desc" style="padding-bottom: 15px;text-align: center;">
                                            质押USDT赚取OLA
                                        </div>
                                    </div>

                                    <div class="staking_flip_card_back_headings lp_flip_card_body_headings">
                                        <h2>Stake</h2>
                                            <button @click="support_coin.is_flip = false" class="staking_flip_card_close_btn" style="top: 11px;">
                                            <img src="/storage/images/x.svg" alt="icon">
                                        </button>
                                    </div>

                                    <div class="project-media" style="padding-bottom: 0;">
                                        <ul class="project-listing">
                                            <li>APR <span>@{{ support_coin.annual_yield }} %</span></li>
                                            <li>Min pledge <span>@{{ support_coin.min_stake_amount }} @{{ support_coin.support_coin_name }}</span></li>
                                            <li>Max pledge <span>@{{ support_coin.max_stake_amount }} @{{ support_coin.support_coin_name }}</span></li>
                                            <li>Balance <span>@{{ support_coin.balance }} @{{ support_coin.support_coin_name }}</span></li>
                                        </ul>
                                    </div>

                                    <div class="staking_flip_card_back_form lq_flip_card_back_form" style="margin-top: 25px">
                                        <form>
                                            <span>Stake Amount</span>
                                            <div class="staking_flip_card_back_form_input" style="max-width: 100%;height: 45px;">
                                                <input type="text" v-model.number="support_coin.stake_amount"
                                                       :placeholder="'0.00 ' + support_coin.support_coin_name">
                                                <button @click="support_coin.stake_amount = Math.min(support_coin.max_stake_amount, support_coin.balance)" type="button">Max</button>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="item-button" style="margin-top: 15px;">
                                        <div @click="submitFn(item.pool_id, support_coin.support_coin_id, support_coin.stake_amount);" class="theme-btn blue" style="padding: 12px 50px;cursor: pointer;">
                                            <span>Submit</span>
                                            <div class="hover-shape1"></div>
                                            <div class="hover-shape2"></div>
                                            <div class="hover-shape3"></div>
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


                    <div id="ProectV2_UPCOMING" class="project_v2_tab_content animate_opacity" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image2.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KyberDyne</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>08 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.33 BUSD</span></li>
                                                <li>Max allocation <span>900.00 BUSD</span></li>
                                                <li>Targeted raise <span>200,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image7.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Thetan Arena</a></h4>
                                            <div class="dsc">PRICE (SSC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>12 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image2.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.89 BUSD</span></li>
                                                <li>Max allocation <span>300.00 BUSD</span></li>
                                                <li>Targeted raise <span>899,900 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image3.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Galaxy War</a></h4>
                                            <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>15 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image3.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>2.25 BUSD</span></li>
                                                <li>Max allocation <span>1000.00 BUSD</span></li>
                                                <li>Targeted raise <span>50,00,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KingdomX</a></h4>
                                            <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>20 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image4.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.59 BUSD</span></li>
                                                <li>Max allocation <span>399.00 BUSD</span></li>
                                                <li>Targeted raise <span>500,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image5.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Cyber City</a></h4>
                                            <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>25 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image5.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.66 BUSD</span></li>
                                                <li>Max allocation <span>800.00 BUSD</span></li>
                                                <li>Targeted raise <span>999,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Gaia Everworld</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>30 Days Left</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image6.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.25 BUSD</span></li>
                                                <li>Max allocation <span>500.00 BUSD</span></li>
                                                <li>Targeted raise <span>888,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="ProectV2_ENDED" class="project_v2_tab_content animate_opacity" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image10.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KyberDyne</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>07 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.33 BUSD</span></li>
                                                <li>Max allocation <span>900.00 BUSD</span></li>
                                                <li>Targeted raise <span>200,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image5.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Thetan Arena</a></h4>
                                            <div class="dsc">PRICE (SSC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>08 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image2.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.89 BUSD</span></li>
                                                <li>Max allocation <span>300.00 BUSD</span></li>
                                                <li>Targeted raise <span>899,900 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image4.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Galaxy War</a></h4>
                                            <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>10 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image3.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>2.25 BUSD</span></li>
                                                <li>Max allocation <span>1000.00 BUSD</span></li>
                                                <li>Targeted raise <span>50,00,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image2.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">KingdomX</a></h4>
                                            <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>14 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image4.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.59 BUSD</span></li>
                                                <li>Max allocation <span>399.00 BUSD</span></li>
                                                <li>Targeted raise <span>500,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/privius-image.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Cyber City</a></h4>
                                            <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content hover-shape-border">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>17 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image5.png" alt="Project-Image">
                                            </div>
                                        </div>
                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.66 BUSD</span></li>
                                                <li>Max allocation <span>800.00 BUSD</span></li>
                                                <li>Targeted raise <span>999,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                    <span class="border-shadow shadow-4"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-item project_item_v2 hover-shape-border">
                                    <div class="project-info d-flex">
                                        <a href="project-details.html">
                                            <img src="/storage/images/home_v2/project-image3.png" alt="Project-Image">
                                        </a>
                                        <div class="project-auother">
                                            <h4 class="mb-10"><a href="project-details.html">Gaia Everworld</a></h4>
                                            <div class="dsc">PRICE (GAC) = 0.13 BUSD</div>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-header d-flex justify-content-between">
                                            <div class="heading-title heading-title-v2">
                                                <div class="heading-title">
                                                    <h4>30 Days Ago</h4>
                                                </div>
                                            </div>
                                            <div class="project-icon">
                                                <img src="/storage/images/home_v2/project-single-image6.png" alt="Project-Image">
                                            </div>
                                        </div>

                                        <div class="project-media">
                                            <ul class="project-listing">
                                                <li>Min allocation <span>0.25 BUSD</span></li>
                                                <li>Max allocation <span>500.00 BUSD</span></li>
                                                <li>Targeted raise <span>888,000 BUSD</span></li>
                                                <li>Access type <span>Public</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social_icons_sect">
                                        <ul class="social_icon_list">
                                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-discord"></i></a></li>
                                            <li class="medium"><a href="#"><i class="icon-medium"></i></a></li>
                                            <li><a href="#"><i class="icon-world"></i></a></li>
                                        </ul>
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
            </div>
        </div>
        <!-- New Start -->

        <!-- Key Points Start -->
        <div class="key_points_section main-project-area">
            <div class="key_points_bg">
                <div class="bg-stone">
                    <span class="stone1"><img src="/storage/images/home_v2/stone1.svg" alt="" class="img-fluid"></span>
                    <span class="stone2"><img src="/storage/images/home_v2/stone2.svg" alt="" class="img-fluid"></span>
                    <span class="stone3"><img src="/storage/images/home_v2/stone3.svg" alt="" class="img-fluid"></span>
                </div>
            </div>
            <div class="container">
                <div class="sec-inner align-items-center mb-30">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">FEATURES</span>
                            <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title">Key Points</h2>
                    </div>

                    <div class="key_points_content">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="key_points_items wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="key_points_item_img">
                                        <img src="/storage/images/home_v2/Key_icon1.png" alt="icon" class="img-fluid">
                                    </div>
                                    <div class="key_points_item_text">
                                        <h3>Decentralized</h3>
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="key_points_items wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="key_points_item_img">
                                        <img src="/storage/images/home_v2/Key_icon2.png" alt="icon" class="img-fluid">
                                    </div>
                                    <div class="key_points_item_text">
                                        <h3>Secure Bridge</h3>
                                        <p>But I must explain to you how all this mistaken idea of new gem denouncing pleasure and praising pain</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="key_points_items wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="key_points_item_img">
                                        <img src="/storage/images/home_v2/Key_icon3.png" alt="icon" class="img-fluid">
                                    </div>
                                    <div class="key_points_item_text">
                                        <h3>Fair Allocations</h3>
                                        <p>When our power of choice is untrammelled and when nothing prevents our being able to do what we like best</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="key_points_items wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <div class="key_points_item_img">
                                        <img src="/storage/images/home_v2/Key_icon4.png" alt="icon" class="img-fluid">
                                    </div>
                                    <div class="key_points_item_text">
                                        <h3>Autopilot Liquidity</h3>
                                        <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Key Points Section End -->

        <!-- Tier_System Start -->
        <div class="tier_system_section main-project-area">
            <div class="container">
                <div class="sec-inner align-items-center mb-30">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">Allocations</span>
                            <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title">Tier System</h2>
                    </div>
                    <div class="tier_system_content">
                        <div class="tier_system_headings wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ul>
                                <li class="tiers_headings">Tiers</li>
                                <li class="staking_headings">Staking</li>
                                <li class="allocation_headings">allocation</li>
                                <li class="requirements_headings">Requirements</li>
                                <li class="kyc_headings">KYC</li>
                                <li class="m-0 weight_headings">Weight</li>
                            </ul>
                        </div>
                        <div class="tier_system_items wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <ul>
                                <li class="tiers_item">
                                    <span><img src="/storage/images/home_v2/iconSilver.svg" alt="icon" class="img-fluid"></span><strong>Silver</strong>
                                </li>
                                <li class="staking_item">$ 10,000</li>
                                <li class="allocation_item">Lottery (20%)</li>
                                <li class="requirements_item">Whitelist Task</li>
                                <li class="kyc_item">No</li>
                                <li class="weight_item">2.5x</li>
                            </ul>
                            <div class="bg-shape">
                                <img src="/storage/images/home_v2/BGShape.svg" alt="img" class="img-fluid">
                            </div>
                            <span class="border-shadow-red1"></span>
                            <span class="border-shadow-red2"></span>
                            <span class="border-shadow-green1"></span>
                            <span class="border-shadow-green2"></span>
                        </div>
                        <div class="tier_system_items wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <ul>
                                <li class="tiers_item">
                                    <span><img src="/storage/images/home_v2/iconBronze.svg" alt="icon" class="img-fluid"></span><strong>Bronze</strong>
                                </li>
                                <li class="staking_item">$ 50,000</li>
                                <li class="allocation_item">Lottery (50%)</li>
                                <li class="requirements_item">Whitelist Task</li>
                                <li class="kyc_item">No</li>
                                <li class="weight_item">No</li>
                            </ul>
                            <div class="bg-shape">
                                <img src="/storage/images/home_v2/BGShape.svg" alt="img" class="img-fluid">
                            </div>
                            <span class="border-shadow-red1"></span>
                            <span class="border-shadow-red2"></span>
                            <span class="border-shadow-green1"></span>
                            <span class="border-shadow-green2"></span>
                        </div>
                        <div class="tier_system_items wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <ul>
                                <li class="tiers_item">
                                    <span><img src="/storage/images/home_v2/icongold.svg" alt="icon" class="img-fluid"></span><strong>Gold</strong>
                                </li>
                                <li class="staking_item">$ 100,000</li>
                                <li class="allocation_item">Guaranteed allocation</li>
                                <li class="requirements_item">No</li>
                                <li class="kyc_item">Yes</li>
                                <li class="weight_item">5.9x</li>
                            </ul>
                            <div class="bg-shape">
                                <img src="/storage/images/home_v2/BGShape.svg" alt="img" class="img-fluid">
                            </div>
                            <span class="border-shadow-red1"></span>
                            <span class="border-shadow-red2"></span>
                            <span class="border-shadow-green1"></span>
                            <span class="border-shadow-green2"></span>
                        </div>
                        <div class="tier_system_items wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <ul>
                                <li class="tiers_item">
                                    <span><img src="/storage/images/home_v2/iconDaimond.svg" alt="icon" class="img-fluid"></span><strong>Diamond</strong>
                                </li>
                                <li class="staking_item">$ 500,000</li>
                                <li class="allocation_item">Guaranteed allocation</li>
                                <li class="requirements_item">No</li>
                                <li class="kyc_item">Yes</li>
                                <li class="weight_item">7.0x</li>
                            </ul>
                            <div class="bg-shape">
                                <img src="/storage/images/home_v2/BGShape.svg" alt="img" class="img-fluid">
                            </div>
                            <span class="border-shadow-red1"></span>
                            <span class="border-shadow-red2"></span>
                            <span class="border-shadow-green1"></span>
                            <span class="border-shadow-green2"></span>
                        </div>
                        <div class="tier_system_items wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.9s" style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: none;">
                            <ul>
                                <li class="tiers_item">
                                    <span><img src="/storage/images/home_v2/iconPlatinum.svg" alt="icon" class="img-fluid"></span><strong>Platinum</strong>
                                </li>
                                <li class="staking_item">$ 10,000,000</li>
                                <li class="allocation_item">Guaranteed allocation</li>
                                <li class="requirements_item">No</li>
                                <li class="kyc_item">Yes</li>
                                <li class="weight_item">10.5x</li>
                            </ul>
                            <div class="bg-shape">
                                <img src="/storage/images/home_v2/BGShape.svg" alt="img" class="img-fluid">
                            </div>
                            <span class="border-shadow-red1"></span>
                            <span class="border-shadow-red2"></span>
                            <span class="border-shadow-green1"></span>
                            <span class="border-shadow-green2"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Tier_System Section End -->

        <!-- Tokenomics Section Start -->
        <div class="tokenomics_section main-project-area">
            <div class="container">
                <div class="sec-inner align-items-center mb-30">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">statistics</span>
                            <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title mb-0">Tokenomics</h2>
                    </div>
                    <div class="tokenomics_contents">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tokenomics_contents_left wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                    <h3 class="counter-number">Total Supply : <span class="counter">10,000,000</span>
                                    </h3>
                                    <h3 class="counter-number">Public Sale : $<span class="counter">0.002</span></h3>
                                    <div class="tokenomics_list_sect">
                                        <ul>
                                            <li>
                                                <span class="farming_pool"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Farming Pool</h4>
                                                    <h5 class="counter-number"><span class="counter">29.8</span>%</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="staking"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Staking</h4>
                                                    <h5 class="counter-number"><span class="counter">14.50</span>%</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="ecosystem"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Ecosystem</h4>
                                                    <h5 class="counter-number"><span class="counter">10.50</span>%</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="advisors"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Advisors</h4>
                                                    <h5 class="counter-number"><span class="counter">8.00</span>%</h5>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="m-0">
                                            <li>
                                                <span class="private_sale"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Private Sale</h4>
                                                    <h5 class="counter-number"><span class="counter">25.00</span>%</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="liquidity"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Liquidity</h4>
                                                    <h5 class="counter-number"><span class="counter">12.00</span>%</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="marketing"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Marketing</h4>
                                                    <h5 class="counter-number"><span class="counter">9.00</span>%</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="advisors"></span>
                                                <div class="tokenomics_list_text">
                                                    <h4>Team</h4>
                                                    <h5 class="counter-number"><span class="counter">5.80</span>%</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tokenomics_contents_right wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <div class="tokenomics_contents_right_img">
                                        <img src="/storage/images/home_v2/piechart.png" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tokenomics Section End -->

        <!-- Multi-Chain Support Section start -->
        <div class="multi_chain_support_sect">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="multi_chain_support_left_sect wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <div class="multi_chain_support_img">
                                <img src="/storage/images/home_v2/Multi_Chain_Support.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="multi_chain_support_right_sect wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <div class="sec-inner align-items-center mb-30">
                                <div class="sec-heading">
                                    <div class="sub-inner mb-15">
                                        <span class="sub-title">Integration</span>
                                        <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                                    </div>
                                    <h2 class="title mb-0">Multi-Chain Support</h2>
                                </div>
                                <div class="multi_chain_support_right_content">
                                    <p>It must explain to you how all this mistaken idea of new gem denouncing pleasure and praising pain that they cannot foresee The gain and trouble that are bound to ensue.</p>
                                    <div class="multi_chain_support_right_list">
                                        <ul>
                                            <li>
                                                <span><img src="/storage/images/home_v2/icon-Check.svg" alt="img" class="img-fluid"></span>Binance Smart Chain
                                            </li>
                                            <li>
                                                <span><img src="/storage/images/home_v2/icon-Check.svg" alt="img" class="img-fluid"></span>Ethereum
                                            </li>
                                            <li>
                                                <span><img src="/storage/images/home_v2/icon-Check.svg" alt="img" class="img-fluid"></span>Polygon (Matic)
                                            </li>
                                        </ul>
                                        <ul class="m-0">
                                            <li>
                                                <span><img src="/storage/images/home_v2/icon-Check.svg" alt="img" class="img-fluid"></span>Avalanche
                                            </li>
                                            <li>
                                                <span><img src="/storage/images/home_v2/icon-Check.svg" alt="img" class="img-fluid"></span>Fuse
                                            </li>
                                            <li>
                                                <span><img src="/storage/images/home_v2/icon-Check.svg" alt="img" class="img-fluid"></span>OKEX Chain
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Multi-Chain Support Section End -->

        <!-- RoadMapV2 Section Start -->
        <div style="display: none;" class="roadmap_v2_section main-project-area">
            <div class="container">
                <div class="sec-inner align-items-center d-flex justify-content-between flex-wrap mb-30">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">Our Goals</span>
                            <img class="heading-left-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title">ROADMAPs</h2>
                    </div>
                    <div class="gamfi-btn-area roadmap-tab-btns">
                        <ul>
                            <li class="tablinks m-0" onclick="openCity(event, 'roadmap_v2_2021')">
                                <button class="readon white-btn black-shap m-0">
                                    <span class="btn-text">2021</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>

                            <li class="tablinks" onclick="openCity(event, 'roadmap_v2_2022')">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">2022</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>

                            <li class="tablinks active" onclick="openCity(event, 'roadmap_v2_2023')" id="defaultOpen">
                                <button class="readon white-btn black-shape m-0">
                                    <span class="btn-text">2023</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="roadmap_v2_tab_content_sect">
                    <div class="roadmap_shape">
                        <img src="/storage/images/home_v2/roadMap_Line.svg" alt="" class="img-fluid">
                    </div>
                    <div id="roadmap_v2_2021" class="tabcontent animate_opacity" style="display: none;">
                        <div class="roadmap_v2_tab_content roadmap_v2_tab_content_2021">
                            <div class="roadmap_slick_slider_section">
                                <div class="row m-0">
                                    <div class="col-md-4 col-m-6">
                                        <div class="roadmap_contents">
                                            <h3>Q1 2021</h3>
                                            <div class="roadmap_list_sect">
                                                <div class="check_icon_bg">
                                                    <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Seed Sale
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>IDO &amp; Token DEX Listing
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Contract Audit
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Staking
                                                    </li>
                                                    <li class="m-0">
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Integration of POLYGON
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-m-6">
                                        <div class="roadmap_contents">
                                            <h3>Q2 2021</h3>
                                            <div class="roadmap_list_sect">
                                                <div class="check_icon_bg">
                                                    <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Launch on GamFi
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Development of NFT Marketplace
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Game launch
                                                    </li>
                                                    <li class="m-0">
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Website with MVP Release
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-m-6">
                                        <div class="roadmap_contents">
                                            <h3>Q3 2021</h3>
                                            <div class="roadmap_list_sect">
                                                <div class="check_icon_bg">
                                                    <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Launchpad Release
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                    </li>
                                                    <li class="m-0">
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Public token sell
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="roadmap_v2_2022" class="tabcontent animate_opacity" style="display: none;">
                        <div class="roadmap_v2_tab_content roadmap_v2_tab_content_2022">
                            <div class="roadmap_slick_slider_section">
                                <div class="row m-0">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="roadmap_contents">
                                            <h3>Q1 2022</h3>
                                            <div class="roadmap_list_sect">
                                                <div class="check_icon_bg">
                                                    <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Seed Sale
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>IDO &amp; Token DEX Listing
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Contract Audit
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Staking
                                                    </li>
                                                    <li class="m-0">
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Integration of POLYGON
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="roadmap_contents">
                                            <h3>Q2 2022</h3>
                                            <div class="roadmap_list_sect">
                                                <div class="check_icon_bg">
                                                    <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Launch on GamFi
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Development of NFT Marketplace
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Game launch
                                                    </li>
                                                    <li class="m-0">
                                                        <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Website with MVP Release
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="roadmap_contents">
                                            <h3>Q3 2022</h3>
                                            <div class="roadmap_list_sect">
                                                <div class="check_icon_bg">
                                                    <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Launchpad Release
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                    </li>
                                                    <li>
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                    </li>
                                                    <li class="m-0">
                                                        <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Public token sell
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="roadmap_v2_2023" class="tabcontent animate_opacity" style="display: block;">
                        <div class="roadmap_v2_tab_content roadmap_v2_tab_content_2023">
                            <div class="roadmap_slick_slider_section">
                                <div class="row m-0 slick_slider_2023 slick-initialized slick-slider">
                                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 4312px; transform: translate3d(-1176px, 0px, 0px);">
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q2 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Launch on GamFi
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Development of NFT Marketplace
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Game launch
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Website with MVP Release
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q3 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Launchpad Release
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Public token sell
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q4 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Public token sell
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 392px;">
                                                <div class="roadmap_contents">
                                                    <h3>Q1 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg">
                                                            <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Seed Sale
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>IDO &amp; Token DEX Listing
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Contract Audit
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Staking
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Integration of POLYGON
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q2 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Launch on GamFi
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Development of NFT Marketplace
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Game launch
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Website with MVP Release
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q3 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Launchpad Release
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Public token sell
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q4 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Public token sell
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents">
                                                    <h3>Q1 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg">
                                                            <img src="/storage/images/home_v2/roadmapChackicon.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Seed Sale
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>IDO &amp; Token DEX Listing
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/RMcheckicon.svg" alt="" class="img-fluid"></span>Contract Audit
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Staking
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Integration of POLYGON
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q2 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Launch on GamFi
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Development of NFT Marketplace
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Game launch
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Website with MVP Release
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q3 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Launchpad Release
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Public token sell
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 392px;">
                                                <div class="roadmap_contents disable">
                                                    <h3>Q4 2023</h3>
                                                    <div class="roadmap_list_sect">
                                                        <div class="check_icon_bg"></div>
                                                        <ul>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Access for indie game developers
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>New Staking Tiers
                                                            </li>
                                                            <li class="m-0">
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Public token sell
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span> Auction system integration.
                                                            </li>
                                                            <li>
                                                                <span><img src="/storage/images/home_v2/munies.svg" alt="" class="img-fluid"></span>Mobile app for iOS and Android.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="farme1"><img src="/storage/images/home_v2/RoadMapV2Fram.png" alt="" class="img-fluid"></span>
            <span class="farme2"><img src="/storage/images/home_v2/RoadMapV2Frame2.png" alt="" class="img-fluid"></span>
        </div>
        <!-- RoadMapV2 Section End -->

        <!-- MEET THE CREW Section Start -->
        <div class="gamfi-team-section pt-115 pb-85 md-pt-75 md-pb-42">
            <div class="container">
                <div class="sec-heading text-center mb-55">
                    <div class="sub-inner  mb-15">
                        <img class="heading-left-image" src="/storage/images/home_v2/steps2.png" alt="Steps-Image">
                        <span class="ml-10 mr-10 sub-title">Team Members</span>
                        <img class="heading-right-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title">Meet The Crew</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Berneice Tran</a></h4>
                            <div class="dsc">Director</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image2.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Genaro Nadel</a></h4>
                            <div class="dsc">VP of Engineering</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image3.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Lynnette Wilkes</a></h4>
                            <div class="dsc">Fullstack Developer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image4.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Claudia Hicks</a></h4>
                            <div class="dsc">Sr. Developer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image5.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Louis Baker</a></h4>
                            <div class="dsc">Software Engineer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image6.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Nathan Bean</a></h4>
                            <div class="dsc">Sr. UI Designer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image7.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">R. Hawley</a></h4>
                            <div class="dsc">Jr. UI/UX Designer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image8.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Pedro Carrera</a></h4>
                            <div class="dsc">Graphic Designer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
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
        <!-- MEET THE CREW Section End -->

        <!-- Our mentors Section Start -->
        <div class="gamfi-team-section gamfi_our_mentor_section pt-115 pb-85 md-pt-75 md-pb-42">
            <div class="container">
                <div class="sec-heading text-center mb-55">
                    <div class="sub-inner  mb-15">
                        <img class="heading-left-image" src="/storage/images/home_v2/steps2.png" alt="Steps-Image">
                        <span class="ml-10 mr-10 sub-title">ADVISORS</span>
                        <img class="heading-right-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title">Our mentors</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Berneice Tran</a></h4>
                            <div class="dsc">Director</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image6.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Nathan Bean</a></h4>
                            <div class="dsc">Sr. UI Designer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image3.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Lynnette Wilkes</a></h4>
                            <div class="dsc">Fullstack Developer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="/storage/images/home_v2/team-image4.png" alt="Team-image">
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Claudia Hicks</a></h4>
                            <div class="dsc">Sr. Developer</div>
                            <ul class="team-icon-list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
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
        <!-- Our mentors Section End -->

        <!-- Our mentors Section Start -->
        <div class="gamfi-team-section gamfi_our_mentor_section pt-115 pb-85 md-pt-75 md-pb-42">
            <div class="container">
                <div class="sec-heading text-center mb-55">
                    <div class="sub-inner  mb-15">
                        <img class="heading-left-image" src="/storage/images/home_v2/steps2.png" alt="Steps-Image">
                        <span class="ml-10 mr-10 sub-title">backers</span>
                        <img class="heading-right-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title">Our PARTNERS</h2>
                </div>
                <div class="our_partners_content_sect">
                    <ul class="our_partners_list">
                        <li><img src="/storage/images/home_v2/1.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/2.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/3.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/4.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/5.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/6.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/7.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/8.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/9.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/10.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/11.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/12.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/13.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/14.png" alt="logo" class="img-fluid"></li>
                        <li><img src="/storage/images/home_v2/15.png" alt="logo" class="img-fluid"></li>

                        <li class="hidden">
                            <img src="/storage/images/home_v2/partner-image.png" alt="logo" class="img-fluid"></li>
                        <li class="hidden">
                            <img src="/storage/images/home_v2/partner-image2.png" alt="logo" class="img-fluid"></li>
                        <li class="hidden">
                            <img src="/storage/images/home_v2/partner-image3.png" alt="logo" class="img-fluid"></li>
                        <li class="hidden">
                            <img src="/storage/images/home_v2/partner-image4.png" alt="logo" class="img-fluid"></li>
                        <li class="hidden">
                            <img src="/storage/images/home_v2/partner-image5.png" alt="logo" class="img-fluid"></li>
                    </ul>
                    <div class="show-more-btn-sect">
                        <button class="readon white-btn black-shape show-more-logo-btn">
                            <span class="btn-text btn-text-1">Show More</span>
                            <span class="btn-text btn-text2">Show lese</span>
                            <span class="hover-shape1"></span>
                            <span class="hover-shape2"></span>
                            <span class="hover-shape3"></span>
                        </button>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
        <!-- Our mentors Section End -->

        <!-- Our mentors Section Start -->
        <div class="gamfi-team-section gamfi_FAQ_Sect gamfi_our_mentor_section pt-115 pb-85 md-pt-75 md-pb-42">
            <div class="container">
                <div class="sec-heading text-center mb-55">
                    <div class="sub-inner  mb-15">
                        <img class="heading-left-image" src="/storage/images/home_v2/steps2.png" alt="Steps-Image">
                        <span class="ml-10 mr-10 sub-title">QUESTIONS &amp; ANSWERS</span>
                        <img class="heading-right-image" src="/storage/images/home_v2/steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title">FREQUENTLY ASKED QUESTIONS</h2>
                </div>
                <div class="faq_content_sect">
                    <div class="faq_questions">
                        <h2 class="accordion no-border">
                            What is Gamfi ?
                            <span>
                                <img src="/storage/images/home_v2/plus.svg" alt="" class="img-fluid icon-plus">
                                <img src="/storage/images/home_v2/munis.svg" alt="" class="Img-fluid icon-minus">
                            </span>
                        </h2>
                        <div class="accordion-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <h2 class="accordion">
                            How we can buy and invest token ?
                            <span>
                                <img src="/storage/images/home_v2/plus.svg" alt="" class="img-fluid icon-plus">
                                <img src="/storage/images/home_v2/munis.svg" alt="" class="Img-fluid icon-minus">
                            </span></h2>
                        <div class="accordion-panel">
                            <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur cites of the word in classical literature.</p>
                        </div>

                        <h2 class="accordion">
                            Why we should choose Gamfi ?
                            <span>
                                <img src="/storage/images/home_v2/plus.svg" alt="" class="img-fluid icon-plus">
                                <img src="/storage/images/home_v2/munis.svg" alt="" class="Img-fluid icon-minus">
                            </span>
                        </h2>
                        <div class="accordion-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <h2 class="accordion">
                            Where we can buy and sell Gamfi NFts ?
                            <span>
                                <img src="/storage/images/home_v2/plus.svg" alt="" class="img-fluid icon-plus">
                                <img src="/storage/images/home_v2/munis.svg" alt="" class="Img-fluid icon-minus">
                            </span>
                        </h2>
                        <div class="accordion-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <h2 class="accordion">
                            How secure is this token ?
                            <span>
                                <img src="/storage/images/home_v2/plus.svg" alt="" class="img-fluid icon-plus">
                                <img src="/storage/images/home_v2/munis.svg" alt="" class="Img-fluid icon-minus">
                            </span>
                        </h2>
                        <div class="accordion-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <h2 class="accordion">
                            What is your contract address ?
                            <span>
                                <img src="/storage/images/home_v2/plus.svg" alt="" class="img-fluid icon-plus">
                                <img src="/storage/images/home_v2/munis.svg" alt="" class="Img-fluid icon-minus">
                            </span>
                        </h2>
                        <div class="accordion-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <h6>Don’t get your answer ? <a href="Get-In-touch.html">Ask Here !</a></h6>
                </div>
            </div>
        </div>
        <!-- Our mentors Section End -->
    </div>

    <!-- Modal Section Start-->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modals-title  mb-0" id="exampleModalLabel">Connect Wallet</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icon-x"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-20">Please select a wallet to connect to this marketplace</p>
                    <div class="connect-section">
                        <ul class="heading-list">
                            <li>
                                <a href="#" class="connect-meta"><span><img src="/storage/images/home_v2/meta-mask.png" alt="Meta-mask-Image"></span>MetaMask</a>
                            </li>
                            <li>
                                <a href="#"><span><img src="/storage/images/home_v2/coinbase.png" alt="Coinbase-Image"></span>Coinbase</a>
                            </li>
                            <li>
                                <a href="#"><span><img src="/storage/images/home_v2/trust.png" alt="Trust-Image"></span>Trust Wallet</a>
                            </li>
                            <li>
                                <a href="#"><span><img src="/storage/images/home_v2/wallet.png" alt="Wallet-Image"></span>WalletConnect</a>
                            </li>
                        </ul>
                    </div>
                    <p>By connecting your wallet, you agree to our <a href="#">
                            <span class="modal-title">Terms of Service </span></a>and our <a href="#">
                            <span class="modal-title"> Privacy Policy</span></a>.</p>
                </div>
            </div>
        </div>
    </div>
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
                                            <img src="/storage/images/home_v2/meta-mask.png" alt="Meta-mask-Image">
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
    <!-- Modal Section End-->

    <script>
        var mining_pools = <?php echo json_encode($miningPools); ?>;
        console.log(mining_pools)
        const app = new Vue({
            el: '#app',
            data: {
                stake_pool_id: '',
                stake_coin_id: '',
                stake_amount: 0.00,
                mining_pools: [],
                countdowns: [
                    {
                        id: 1,
                        endTime: 1735638114000,
                        countdown_str: ''
                    },
                    {
                        id: 2,
                        endTime: 1735638114000,
                        countdown_str: ''
                    }
                ]
            },
            mounted() {
                this.mining_pools = mining_pools
                // 开始倒计时
                this.mining_pools.forEach(mining_pool => {
                    this.updateCountdownStr(mining_pool)
                    setInterval(() => {
                        this.updateCountdownStr(mining_pool)
                    }, 1000)
                })
            },
            methods: {
                updateCountdownStr(countdown) {
                    const now = dayjs()
                    const diff = new Date(countdown.end_time).getTime() - now
                    if (diff < 0) {
                        countdown.countdown_str = 'Finish'
                    } else {
                        const d = Math.floor(diff / 86400000)
                        const h = dayjs(diff).format('HH')
                        const m = dayjs(diff).format('mm')
                        const s = dayjs(diff).format('ss')
                        // countdown.countdown_str = `${d}天${h}时${m}分${s}秒`
                        countdown.countdown_str =  `
                           <ul>
                            <li class="days">${d}<span>D</span></li>
                            <li class="hours">${h}<span>H</span></li>
                            <li class="minutes">${m}<span>M</span></li>
                            <li class="seconds">${s}<span>S</span></li>
                           </ul>
                        `
                    }
                },
                submitFn(mining_pool_id, stack_coin_id, stack_amount) {
                    axios.post('/create-stack', {
                        mining_pool_id: mining_pool_id,
                        stack_coin_id: stack_coin_id,
                        stack_amount: stack_amount,
                    }, {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }).then(function (response) {
                        console.log(response);
                        console.log(response.data.code)
                        var msg = response.data.msg
                        layer.open({
                            type: 1, // page 层类型
                            skin: 'demo-class',
                            area: ['40%', 'auto'],
                            title: 'Message',
                            shade: 0.6, // 遮罩透明度
                            shadeClose: true, // 点击遮罩区域，关闭弹层
                            anim: 1, // 0-6 的动画形式，-1 不开启
                            btn: ['Close'],
                            btnAlign: 'c',
                            content: '<div style="text-align: center;padding-top: 15px;">'+ msg +'</div>'
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
                },
            }
        })
    </script>
@stop
