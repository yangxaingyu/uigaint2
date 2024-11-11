<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
{{--    <link rel="shortcut icon" type="image/x-icon"--}}
{{--          href="{{$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']}}/favicon.png">--}}
{{--    <link href="{{\App\Server\Helper::assets('/css/style.css?v=1.0.0')}}" rel="stylesheet">--}}
    <script src="https://js.stripe.com/v3/"></script>
{{--    <title>@yield('title')</title>--}}
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



</head>

<style>

    .account__form .item-text input:checked::after {
        opacity: 0 !important;
    }
</style>
<body>
<div id="preloader-active">
</div>
<header id="gamfi-header" class="gamfi-header-section transparent-header">
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="heaader-inner-area d-flex justify-content-between align-items-center">
                <div class="gamfi-logo-area d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="/"><img src="/storage/images/home/logo.png" alt="logo"></a>
                    </div>
                    <div class="header-menu">
                        <ul class="nav-menu">
                            <li><a href="/">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="/">Home 1</a></li>
                                    <li><a href="index2.html">Home 2</a></li>
                                    <li><a href="index3.html">Home 3</a></li>
                                    <li><a href="index4.html">Home 4</a></li>
                                </ul>
                            </li>
                            <li><a href="project.html">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="project-clasic.html">Projects Clasic 1</a></li>
                                    <li><a href="project-clasic-2.html">Projects Clasic 2</a></li>
                                    <li><a href="project.html">Projects List</a></li>
                                    <li><a href="explore.html">Projects Grid</a></li>
                                    <li><a href="calendar.html">Project Calendar</a></li>
                                    <li><a href="project-details.html">Project Details 1</a></li>
                                    <li><a href="project_details2.html">Project Details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="staking.html">Staking</a>
                                <ul class="sub-menu">
                                    <li><a href="staking.html">Staking 1</a></li>
                                    <li><a href="staking-2.html">Staking 2</a></li>
                                    <li><a href="staking-3.html">Staking 3</a></li>
                                    <li><a href="staking-4.html">Staking 4</a></li>
                                    <li><a href="staking-5-lp.html">Staking 5 LP</a></li>
                                </ul>
                            </li>
                            <li class="mega_menu_hov"><a href="#">Pages +</a>
                                <!-- Mega Menu Start -->
                                <div class="gamfi_mega_menu_sect">
                                    <div class="gamfi_mega_menu">
                                        <div class="container">
                                            <div class="mega_menu_content">
                                                <div class="mega_menu_left_sect">
                                                    <div class="mega_menu_left_bg_sect">
                                                        <div class="mega_menu_left_bg">
                                                            <div class="mega_menu_left_bg_color">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home_menu_list">
                                                        <div class="home_menu_list_headings">
                                                            <h2>Home Pages</h2>
                                                            <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <a href="/">01
                                                                    <span><img src="/storage/images/home/index-V1.png" alt="Index V1" class="img-fluid"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="index2.html">02
                                                                    <span><img src="/storage/images/home/index-V2.png" alt="Index V2" class="img-fluid"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="index3.html">03
                                                                    <span><img src="/storage/images/home/index-V3.png" alt="Index V3" class="img-fluid"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="index4.html">04
                                                                    <span><img src="/storage/images/home/index-V4.png" alt="Index V3" class="img-fluid"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="home_menu_right_sect">
                                                    <div class="">

                                                    </div>
                                                    <div class="menu_column project_column">
                                                        <div class="menu_headings">
                                                            <h2>PROJECT PAGES</h2>
                                                            <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                        </div>
                                                        <ul>
                                                            <li><a href="project-clasic.html">Projects Clasic 1</a> <span class="hot">HOT</span>
                                                            </li>
                                                            <li><a href="project-clasic-2.html">Projects Clasic 2</a> <span class="new">NEW</span>
                                                            </li>
                                                            <li><a href="project.html">Projects List</a></li>
                                                            <li><a href="explore.html">Project Grid</a></li>
                                                            <li><a href="calendar.html">Project Calendar</a></li>
                                                            <li><a href="project-details.html">Project Details 1</a></li>
                                                            <li><a href="project_details2.html">Project Details 2</a> <span class="hot">HOT</span>
                                                            </li>
                                                            <li><a href="igo-ranking.html">Project Ranking</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="two_menu_column">
                                                        <div class="menu_column project_column">
                                                            <div class="menu_headings">
                                                                <h2>STAKE &amp; Farm</h2>
                                                                <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                            </div>
                                                            <ul>
                                                                <li><a href="staking.html">Staking One</a></li>
                                                                <li><a href="staking-2.html">Staking Two</a></li>
                                                                <li><a href="staking-3.html">Staking Three</a> <span class="new">NEW</span></li>
                                                                <li><a href="staking-4.html">Staking Four</a> <span class="new">NEW</span>
                                                                    <span class="hot">HOT</span></li>
                                                                <li><a href="staking-5-lp.html">Staking Five LP</a> <span class="new">NEW</span></li>
                                                                <li><a href="farm.html">Farming</a></li>
                                                                <li><a href="leaderboard.html">Leaderboard</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="menu_column project_column">
                                                            <div class="menu_headings">
                                                                <h2>BLOG PAGES</h2>
                                                                <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                            </div>
                                                            <ul>
                                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                <li><a href="blog-clasic.html">Blog Classic</a></li>
                                                                <li><a href="blog-details.html">Artcles Details</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="two_menu_column">
                                                        <div class="menu_column project_column">
                                                            <div class="menu_headings">
                                                                <h2>TOKENOMIC &amp; TIER</h2>
                                                                <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                            </div>
                                                            <ul>
                                                                <li><a href="tier.html">Tier System 1</a></li>
                                                                <li><a href="tier-2.html">Tier System 2</a><span class="hot">HOT</span></li>
                                                                <li><a href="tier-3.html">Tier System 3</a></li>
                                                                <li><a href="tokenomics.html">Tokenomics</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="menu_column project_column">
                                                            <div class="menu_headings">
                                                                <h2>other Pages</h2>
                                                                <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                            </div>
                                                            <ul>
                                                                <li><a href="governance.html">Governance</a> <span class="new">NEW</span>
                                                                    <span class="hot">HOT</span></li>
                                                                <li><a href="governance-details.html">Voting Details</a> <span class="new">NEW</span>
                                                                </li>
                                                                <li><a href="get-in-touch.html">Contact Us</a></li>
                                                                <li><a href="roadmap.html">Roadmap</a></li>
                                                                <li><a href="faq.html">FAQs</a></li>
                                                                <li><a href="igo-apply.html">Apply For Project</a></li>
                                                                <li><a href="teamdetails.html">Team Details</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                    <div class="menu_column project_column">
                                                        <div class="menu_headings">
                                                            <h2>AUth Pages</h2>
                                                            <span><img src="/storage/images/home/border-buttomShape.png" alt="" class="img-fluid"></span>
                                                        </div>
                                                        <ul>
                                                            <li><a href="/kyc-process">KYC Step 01</a> <span class="hot">HOT</span></li>
                                                            <li><a href="/kyc-process-step2">KYC Step 02</a></li>
                                                            <li><a href="/kyc-process-step3">KYC Step 03</a></li>
                                                            <li><a href="connect-wallet.html">Connect Wallet</a></li>
                                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Wallet Module</a>
                                                            </li>
                                                            <li><a href="/signup">Register</a></li>
                                                            <li><a href="/signin">Login</a></li>
                                                            <li><a href="forget-password.html">Forget Password</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mega Menu End -->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gamfi-btn-area">
                    <ul>
                        <li>
                            <a id="nav-expander" class="nav-expander bar" href="#">
                                <div class="bar">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                </div>
                            </a>
                        </li>
                        <li class="buy-token">
                            <a class="readon black-shape" href="#">
                                <span class="btn-text">Top Up </span>
                                <i class="icon-arrow_down"></i>
                                <span class="hover-shape1"></span>
                                <span class="hover-shape2"></span>
                                <span class="hover-shape3"></span>
                            </a>
                            <ul>
                                <li><a href="#"><img src="/storage/images/home/pancake.png" alt="pancake"> PancakeSwap</a></li>
                                <li><a href="#"><img src="/storage/images/home/uniswap.png" alt="uniswap"> UniSwap</a></li>
                                <li><a href="#"><img src="/storage/images/home/market.png" alt="market"> CoinMarketCap</a></li>
                                <li><a href="#"><img src="/storage/images/home/gate.png" alt="gate"> Gate.io</a></li>
                            </ul>
                        </li>
                        <li class="connect-btn-wrapper">
                            <a href="/signin">
                                <button type="button" class="connect-btn readon white-btn hover-shape" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="/storage/images/login.png" alt="Icon"  style="width: 20px;">
                                    <span class="btn-text">Login </span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Canvas Mobile Menu start -->
    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
        <div class="close-btn hash-has-sub">
            <a id="nav-close2" class="nav-close hash">
                <div class="line">
                    <span class="line1"></span>
                    <span class="line2"></span>
                </div>
            </a>
        </div>
        <div class="sidebar-logo mb-30 hash-has-sub">
            <a href="index.html" class="hash"><img src="/storage/images/logo-dark.png" alt=""></a>
        </div>
        <ul class="nav-menu">
            <li class="current-menu-item has-sub hash-has-sub">
                <span class="submenu-button"><em></em></span><a href="index.html" class="hash">Home</a>
                <ul class="sub-menu" style="display: none;">
                    <li class="hash-has-sub"><a href="index.html" class="hash">Home 1</a></li>
                    <li class="hash-has-sub"><a href="index2.html" class="hash">Home 2</a></li>
                    <li class="hash-has-sub"><a href="index3.html" class="hash">Home 3</a></li>
                    <li class="hash-has-sub"><a href="index4.html" class="hash">Home 4</a></li>
                </ul>
            </li>
            <li class="has-sub hash-has-sub">
                <span class="submenu-button"><em></em></span><a href="project.html" class="hash">Projects</a>
                <ul class="sub-menu" style="display: none;">
                    <li class="hash-has-sub"><a href="project-clasic.html" class="hash">Projects Clasic 1</a></li>
                    <li class="hash-has-sub"><a href="project-clasic-2.html" class="hash">Projects Clasic 2</a></li>
                    <li class="hash-has-sub"><a href="project.html" class="hash">Projects List</a></li>
                    <li class="hash-has-sub"><a href="explore.html" class="hash">Project Grid</a></li>
                    <li class="hash-has-sub"><a href="calendar.html" class="hash">Project Calendar</a></li>
                    <li class="hash-has-sub"><a href="project-details.html" class="hash">Project Details 1</a></li>
                    <li class="hash-has-sub"><a href="project_details2.html" class="hash">Project Details 2</a></li>
                    <li class="hash-has-sub"><a href="igo-ranking.html" class="hash">Project Ranking</a></li>
                </ul>
            </li>
            <li class="has-sub hash-has-sub">
                <span class="submenu-button"><em></em></span><a href="staking.html" class="hash">Staking</a>
                <ul class="sub-menu" style="display: none;">
                    <li class="hash-has-sub"><a href="staking.html" class="hash">Staking 1</a></li>
                    <li class="hash-has-sub"><a href="staking-2.html" class="hash">Staking 2</a></li>
                    <li class="hash-has-sub"><a href="staking-3.html" class="hash">Staking 3</a></li>
                    <li class="hash-has-sub"><a href="staking-4.html" class="hash">Staking 4</a></li>
                    <li class="hash-has-sub"><a href="staking-5-lp.html" class="hash">Staking 5 LP</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children has-sub hash-has-sub"><span class="submenu-button"><em></em></span>
                <a href="#" class="hash">Pages</a>
                <ul class="sub-menu" style="display: none;">
                    <li class="menu-item-has-children has-sub hash-has-sub">
                        <span class="submenu-button"><em></em></span><a href="project.html" class="hash">Projects Pages</a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="hash-has-sub"><a href="project-clasic.html" class="hash">Projects Clasic 1</a></li>
                            <li class="hash-has-sub"><a href="project-clasic-2.html" class="hash">Projects Clasic 2</a></li>
                            <li class="hash-has-sub"><a href="project.html" class="hash">Projects List</a></li>
                            <li class="hash-has-sub"><a href="explore.html" class="hash">Project Grid</a></li>
                            <li class="hash-has-sub"><a href="calendar.html" class="hash">Project Calendar</a></li>
                            <li class="hash-has-sub"><a href="project-details.html" class="hash">Project Details 1</a></li>
                            <li class="hash-has-sub"><a href="project_details2.html" class="hash">Project Details 2</a></li>
                            <li class="hash-has-sub"><a href="igo-ranking.html" class="hash">Project Ranking</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-sub hash-has-sub">
                        <span class="submenu-button"><em></em></span><a href="#" class="hash">Stake &amp; Farm</a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="hash-has-sub"><a href="staking.html" class="hash">Staking 1</a></li>
                            <li class="hash-has-sub"><a href="staking-2.html" class="hash">Staking 2</a></li>
                            <li class="hash-has-sub"><a href="staking-3.html" class="hash">Staking 3</a></li>
                            <li class="hash-has-sub"><a href="staking-4.html" class="hash">Staking 4</a></li>
                            <li class="hash-has-sub"><a href="staking-5-lp.html" class="hash">Staking 5 LP</a></li>
                            <li class="hash-has-sub"><a href="farm.html" class="hash">Farming</a></li>
                            <li class="hash-has-sub"><a href="leaderboard.html" class="hash">Leaderboard</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-sub hash-has-sub">
                        <span class="submenu-button"><em></em></span><a href="#" class="hash">Other Pages</a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="hash-has-sub"><a href="get-in-touch.html" class="hash">Contact Us</a></li>
                            <li class="hash-has-sub"><a href="roadmap.html" class="hash">Roadmap</a></li>
                            <li class="hash-has-sub"><a href="faq.html" class="hash">FAQs</a></li>
                            <li class="hash-has-sub"><a href="igo-apply.html" class="hash">Apply For Project</a></li>
                            <li class="hash-has-sub"><a href="teamdetails.html" class="hash">Team Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-sub hash-has-sub">
                        <span class="submenu-button"><em></em></span><a href="#" class="hash">Tokenomics &amp; Tier</a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="hash-has-sub"><a href="tier.html" class="hash">Tier System 1</a></li>
                            <li class="hash-has-sub"><a href="tier-2.html" class="hash">Tier System 2</a></li>
                            <li class="hash-has-sub"><a href="tier-3.html" class="hash">Tier System 3</a></li>
                            <li class="hash-has-sub"><a href="tokenomics.html" class="hash">Tokenomics</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-sub hash-has-sub">
                        <span class="submenu-button"><em></em></span><a href="#" class="hash">Blog &amp; Pages</a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="hash-has-sub"><a href="blog-grid.html" class="hash">Blog Grid</a></li>
                            <li class="hash-has-sub"><a href="blog-clasic.html" class="hash">Blog Classic</a></li>
                            <li class="hash-has-sub"><a href="blog-details.html" class="hash">Artcles Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-sub hash-has-sub">
                        <span class="submenu-button"><em></em></span><a href="/signin"" class="hash">Auth Pages</a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="hash-has-sub"><a href="/kyc-process" class="hash">KYC Step 01</a></li>
                            <li class="hash-has-sub"><a href="/kyc-process-step2" class="hash">KYC Step 02</a></li>
                            <li class="hash-has-sub"><a href="/kyc-process-step3" class="hash">KYC Step 03</a></li>
                            <li class="hash-has-sub"><a href="connect-wallet.html" class="hash">Connect Wallet</a></li>
                            <li class="hash-has-sub">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="hash">Wallet Module</a></li>
                            <li class="hash-has-sub"><a href="/signup" class="hash">Register</a></li>
                            <li class="hash-has-sub"><a href="/signin" class="hash">Login</a></li>
                            <li class="hash-has-sub"><a href="forget-password.html" class="hash">Forgot Password</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children has-sub hash-has-sub"><span class="submenu-button"><em></em></span>
                <a href="#" class="hash">Buy Token</a>
                <ul class="sub-menu" style="display: none;">
                    <li class="hash-has-sub"><a href="#" class="hash">PancakeSwap</a></li>
                    <li class="hash-has-sub"><a href="#" class="hash">UniSwap</a></li>
                    <li class="hash-has-sub"><a href="#" class="hash">CoinMarketCap</a></li>
                    <li class="hash-has-sub"><a href="#" class="hash">Gate.io</a></li>
                </ul>
            </li>
            <li class="connect-btn-wrapper">
                <button type="button" class="readon black-shape-big connect-wallet-btn-for-mobile" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="/storage/images/home/connect_white.png" alt="Icon">
                    <span class="btn-text">Connect </span>
                    <span class="hover-shape1"></span>
                    <span class="hover-shape2"></span>
                    <span class="hover-shape3"></span>
                </button>
            </li>
        </ul>
    </nav>
    <!-- Canvas Menu end -->
</header>

@yield('home')
@yield('signin')
@yield('signup')
@yield('forget-password')
@yield('project-details')
@yield('kyc-process')
@yield('kyc-process-step2')
@yield('kyc-process-step3')
@yield('deposit')
@yield('transfer ')
<div class="gamfi-footer-section">
    <div class="container">
        <div class="footer-cta-area text-center active-shape hover-shape-inner">
            <h2 class="title mb-15">
                Apply for project<br>
                incubation
            </h2>
            <p class="dsc mb-40">
                If you want to lanuch an IGO/IDO, It will be your perfect choice
            </p>
            <a class="theme-btn d-inline-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2500ms" href="igo-apply.html" style="visibility: hidden; animation-duration: 2500ms; animation-delay: 300ms; animation-name: none;">
                <span>Apply For IGO</span>
                <div class="hover-shape1"></div>
                <div class="hover-shape2"></div>
                <div class="hover-shape3"></div>
            </a>
            <span class="border-shadow shadow-1"></span>
            <span class="border-shadow shadow-2"></span>
            <span class="border-shadow shadow-3"></span>
            <span class="border-shadow shadow-4"></span>
            <span class="hover-shape-bg hover_shape1"></span>
            <span class="hover-shape-bg hover_shape2"></span>
            <span class="hover-shape-bg hover_shape3"></span>
        </div>
    </div>
    <div class="footer-area">
        <div class="container">
            <div class="sec-heading text-center">
                <div class="sub-inner mb-52">
                    <img class="heading-right-image" src="/storage/images/home/steps2.png" alt="Steps-Image">
                    <span class="sub-title white-color">Find us on Social</span>
                    <img class="heading-left-image" src="/storage/images/home/steps.png" alt="Steps-Image">
                </div>
            </div>
            <div class="footer-listing text-center mb-100 md-mb-70">
                <ul class="footer-icon-list">
                    <li>
                        <a href="#">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-telegram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-medium"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-discord"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-logo text-center mb-45">
                <a href="/">
                    <img src="/storage/images/home/logo.png" alt="Footer-logo">
                </a>
            </div>
            <div class="footer-mainmenu text-center mb-20">
                <ul>
                    <li>
                        <a href="#">Features</a>
                    </li>
                    <li>
                        <a href="#">How it works</a>
                    </li>
                    <li>
                        <a href="#">Token info</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="#">Social media</a>
                    </li>
                    <li>
                        <a href="#">Terms of Service</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>
            <div class="copyright-area text-center mb-0">
                <p class="dsc mb-37">
                    Copyright © 2024. All Rights Reserved by
                    <a target="_blank" class="gafi" href="#">GaFi</a>
                </p>
            </div>
            <div class="scrollup text-center">
                <a href="#">
                    <i class="icon-arrow_up"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="{{\App\Server\Helper::assets('/js/web3.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/metamask.js')}}"></script>

<!-- modernizr js -->
<script src="{{\App\Server\Helper::assets('/js/modernizr-2.8.3.min.js')}}"></script>a

<!-- jquery latest version -->
<script src="{{\App\Server\Helper::assets('/js/jquery.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/bootstrap.bundle.min.js')}}"></script>

{{--<script src="{{\App\Server\Helper::assets('/js/detector-exec.js')}}"></script>--}}
{{--<script src="{{\App\Server\Helper::assets('/js/hook-exec.js')}}"></script>--}}
{{--<script src="{{\App\Server\Helper::assets('/js/inspector.js')}}"></script>--}}

<script src="{{\App\Server\Helper::assets('/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/wow.min.js')}}"></script>

<script src="{{\App\Server\Helper::assets('/js/jquery.counterup.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/waypoints.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/owl.carousel.min.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/plugins.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/time-counter.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/metamaskhandler.js')}}"></script>
<script src="{{\App\Server\Helper::assets('/js/main.js')}}"></script>
</body>

</html>
