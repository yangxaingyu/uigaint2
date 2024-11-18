@extends('main.main')

@section('project-details')

    <div class="loader_first" style="display: none;">
        <div class="circular-spinner"></div>
    </div>
    <div class="gamfi-breadcrumbs-section breadcrumbs-style2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="breadcrumbs-area sec-heading">
                        <div class="sub-inner">
                            <a class="breadcrumbs-link" href="/">Home</a>
                            <a class="breadcrumbs-link" href="/">Project</a>
                            <span class="sub-title">Project Details</span>
                            <img class="heading-left-image" src="/storage/images/steps.png" alt="Steps-Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 breadcrumbs-form md-mt-10">
                    <div class="breadcrumbs-social ml-30 md-ml-0" data-bs-toggle="modal" data-bs-target="#shareIocns">
                        <a href="#"><i class="icon-share"></i> Share</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-details-conent gamfi-about-secion pb-80 md-pb-20">
        <div class="container">
            <div class="game-price-item hover-shape-inner">
                <div class="game-price-inner">
                    <div class="total-price">
                        <div class="price-inner d-flex mb-45">
                            <div class="image-icon">
                                <img src="/storage/images/ninga-image.png" alt="icon-image">
                            </div>
                            <div class="price-details">
                                <h3 class="mb-15">The Wasted Lands</h3>
                                <div class="dsc">price (DDO) = 0.13 BUSD</div>
                            </div>
                        </div>
                        <div class="all-raise mb-10"> Total Raise 75,999.70 BUSD ( 86% )</div>
                    </div>
                    <div class="allocation-max text-center">
                        <img src="/storage/images/icon-2.png" alt="icon-image">
                        <div class="allocation">Allocation: 500 BUSD Max</div>
                    </div>
                    <div class="targeted-raise">
                        <div class="all-raise mb-10">Sale End In</div>
                        <div class="price-counter mb-48">
                            <div class="timer timer_1">
                                <ul>
                                    <li class="days">-560<span>D</span></li>
                                    <li class="hours">10<span>H</span></li>
                                    <li class="minutes">39<span>M</span></li>
                                    <li class="seconds">39<span>S</span></li>
                                </ul>
                            </div>
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
                <div class="banner-bottom-content mt-40">
                    <div class="btn-area" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a class="readon white-shape-small" href="#">
                            <span class="btn-text">Claim Token </span>
                            <span class="hover-shape1"></span>
                            <span class="hover-shape2"></span>
                            <span class="hover-shape3"></span>
                        </a>
                    </div>
                    <div class="text-content">
                        Participants 4017/5000
                    </div>
                    <div class="social-area">
                        <ul class="social-icon-list">
                            <li><a href="#"><i class="icon-telegram"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-discord"></i></a></li>
                            <li><a href="#"><i class="icon-medium"></i></a></li>
                            <li><a href="#"><i class=" icon-world"></i></a></li>
                        </ul>
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
            <div class="row mt-30">
                <div class="col-md-6">
                    <div class="project-item">
                        <div class="project-info">
                            <h4 class="mb-30">Galaxy War
                                <img src="/storage/images/project-heading-image.png" alt="project"></h4>
                        </div>
                        <div class="project-content">
                            <div class="project-media">
                                <ul class="project-listing">
                                    <li>Token Distribution <span>Date UTC</span></li>
                                    <li>Min. Allocation <span>0.01 BUSD</span></li>
                                    <li>Max. Allocation <span>1531.13 BUSD</span></li>
                                    <li>Token Price <span>1 BUSD = 555.55 SIDUS</span></li>
                                    <li>Access type <span>Public</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-item">
                        <div class="project-info d-flex">
                            <h4 class="mb-20">Token Info
                                <img src="/storage/images/project-heading-image.png" alt="project"></h4>
                        </div>
                        <div class="project-content">
                            <div class="project-media">
                                <ul class="project-listing">
                                    <li>Token Name <span>The Wasted Lands</span></li>
                                    <li>Token Symbol <span>DDO</span></li>
                                    <li>Decimals <span>18</span></li>
                                    <li>Address <span><img src="/storage/images/icon.png" alt="project">0x22d40020282f9c8</span>
                                    </li>
                                    <li>Total Supply <span>3,333,334.00 DDO</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Summary  Start-->
            <div class="row mt-50 main-content" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
                <div class="col-md-4 sidebar is-affixed" style="height: 640px; position: relative;">
                    <div class="project-summary-menu project_summary_menu_BgGridient sidebar__inner" id="myScrollspy" style="position: fixed; top: 20px; left: 52px; width: 376px;">
                        <div id="ProjectSammeryTabs" class="project_summary_tabs_sect">
                            <div class="active project-summary-tab-btn  project-summary-tab-btn1" data-target="#project_summary">
                                <a href="#project_summary">Project Summary
                                    <img src="/storage/images/menu-image.png" alt="project"></a></div>

                            <div class="project-summary-tab-btn project-summary-tab-btn2" data-target="#Schedule">
                                <a href="#Schedule">Schedule
                                    <img src="/storage/images/menu-image.png" alt="project"></a></div>

                            <div class="project-summary-tab-btn project-summary-tab-btn3" data-target="#Comparison">
                                <a href="#Comparison">Comparison
                                    <img src="/storage/images/menu-image.png" alt="project"></a></div>

                            <div class="project-summary-tab-btn project-summary-tab-btn4" data-target="#Tokenomics">
                                <a href="#Tokenomics">Tokenomics
                                    <img src="/storage/images/menu-image.png" alt="project"></a></div>

                            <div class="project-summary-tab-btn project-summary-tab-btn5" data-target="#Roadmap">
                                <a href="#Roadmap">Roadmap
                                    <img src="/storage/images/menu-image.png" alt="project"></a></div>

                            <div class="project-summary-tab-btn project-summary-tab-btn6" data-target="#Team_Members">
                                <a href="#Team_Members">Team Member<img src="/storage/images/menu-image.png" alt="project"></a>
                            </div>

                            <div class="project-summary-tab-btn project-summary-tab-btn7" data-target="#Investors">
                                <a href="#Investors">Investors<img src="/storage/images/menu-image.png" alt="project"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 pl-35 sm-pl-15 sm-pt-40">
                    <div class="project_summarySectScrllab">
                        <div class="project-summary-content" id="project_summary">
                            <div class="project-summary-information">
                                <h4 class="title2 mb-15">Project Summary</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur cites of the word in classical literature.</p>
                                <p class="mb-30">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original</p>
                                <div class="project-video-area">
                                    <img src="/storage/images/project-video.jpg" alt="Project-image">
                                    <a class="video-icons" href="https://www.youtube.com/watch?v=fzBTvDraO5U"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="ScrollSpy_sections" id="Schedule">
                            <h4 class="mb-20">Schedule</h4>
                            <table class="mb-55">
                                <tbody>
                                <tr class="table-header">
                                    <th>Round</th>
                                    <th>Opens</th>
                                    <th>Closes</th>
                                </tr>
                                <tr>
                                    <td>Allocation</td>
                                    <td>20.02.2022 08:00:00 UTC</td>
                                    <td>22.02.2022 24:00:00 UTC</td>
                                </tr>
                                <tr>
                                    <td>Validator Round</td>
                                    <td>29.02.2022 05:00:00 UTC</td>
                                    <td>30.02.2022 03:00:00 UTC</td>
                                </tr>
                                <tr>
                                    <td>Staking Round</td>
                                    <td>08.03.2022 12:00:00 UTC</td>
                                    <td>10.03.2022 05:00:00 UTC</td>
                                </tr>
                                <tr>
                                    <td>Sale Ends</td>
                                    <td>15.03.2022 02:00:00 UTC</td>
                                    <td>18.03.2022 16:00:00 UTC</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ScrollSpy_sections" id="Comparison">
                            <h4 class="mb-20">Comparison</h4>
                            <p class="mb-45">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur cites of the word in classical literature. Standard chunkde Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original
                                making it over 2000 years old. Richard McClintock</p>
                        </div>

                        <div class="ScrollSpy_sections" id="Tokenomics">
                            <h4 class="mb-20">Tokenomics</h4>
                            <div class="project-service align-items-center">
                                <div class="project-image">
                                    <img src="/storage/images/explore-image.png" alt="Project-image">
                                </div>
                                <div class="project-content">
                                    <div class="project-price mr-65">
                                        <div class="project-sale darkslateblue">
                                            <span>Marketing</span>
                                            <h5>18.00%</h5>
                                        </div>
                                        <div class="project-sale cyan">
                                            <span>Team</span>
                                            <h5>7.5%</h5>
                                        </div>
                                        <div class="project-sale dodgerBlue">
                                            <span>Advisors</span>
                                            <h5>10.00%</h5>
                                        </div>
                                        <div class="project-sale turquoise">
                                            <span>Ecosystem</span>
                                            <h5>16.33%</h5>
                                        </div>
                                    </div>
                                    <div class="project-price">
                                        <div class="project-sale springGreen">
                                            <span>Private Sale</span>
                                            <h5>30.00%</h5>
                                        </div>
                                        <div class="project-sale darkturquoise">
                                            <span>Staking</span>
                                            <h5>9.50%</h5>
                                        </div>
                                        <div class="project-sale turquoise">
                                            <span>Liquidity</span>
                                            <h5>12.00%</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ScrollSpy_sections" id="Roadmap">
                            <h4 class="title2 mb-15">Roadmap</h4>
                            <div class="project_details_road_map_sect mb-35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="project_details_road_map_content">
                                            <h4>Q1 2021</h4>
                                            <ul>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Launch on GamFi
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Seed round
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Listing on CEX
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Development of NFT Marketplace
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="project_details_road_map_content">
                                            <h4>Q2 2021</h4>
                                            <ul>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>First NFT pre-orders
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Launch of the GAME coin
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Full-scale platform launch
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="project_details_road_map_content">
                                            <h4>Q1 2022</h4>
                                            <ul>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Launch on GamFi
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/RMcheckicon.svg" alt="icon" class="img-fluid"></span>Auction system integration.
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>Mobile app for iOS and Android.
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>Development of NFT Marketplace
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>Game launch
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="project_details_road_map_content">
                                            <h4 class="disable">Q2 2022</h4>
                                            <ul>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>Application for crypto exchange
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>Private round
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>New team member added
                                                </li>
                                                <li>
                                                    <span><img src="/storage/images/munies.svg" alt="icon" class="img-fluid"></span>Team expansion
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ScrollSpy_sections" id="Team_Members">
                            <h4 class="title2 mb-15">Team Members</h4>
                            <div class="project_details_team_members_sect">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Berneice Tran</h5>
                                            <h6>Director</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image2.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Loreo Zina</h5>
                                            <h6>Co-Founder</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image3.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Robert Zeo</h5>
                                            <h6>Game Designer</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image4.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Monika Deo</h5>
                                            <h6>Marketter</h6>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image5.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Sweety Neo</h5>
                                            <h6>Seo Enginneer</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image6.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Tran Neolas</h5>
                                            <h6>Enginneer</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image7.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>John Deo</h5>
                                            <h6>UI Designer</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="project_details_team_members_card">
                                            <div class="team_members_img">
                                                <img src="/storage/images/team-image8.png" alt="img" class="img-fluid">
                                            </div>
                                            <h5>Zina Doom</h5>
                                            <h6>Developer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ScrollSpy_sections" id="Investors">
                            <h4 class="title2 mt-23 mb-15">Investors</h4>
                            <div class="list_investors_list">
                                <ul>
                                    <li class="first">
                                        <img src="/storage/images/1.png" alt="logo" class="img-fluid"></li>
                                    <li class="second">
                                        <img src="/storage/images/2.png" alt="logo" class="img-fluid"></li>
                                    <li class="third">
                                        <img src="/storage/images/3.png" alt="logo" class="img-fluid"></li>
                                    <li class="last">
                                        <img src="/storage/images/4.png" alt="logo" class="img-fluid"></li>
                                    <li class="first">
                                        <img src="/storage/images/6.png" alt="logo" class="img-fluid"></li>
                                    <li class="second">
                                        <img src="/storage/images/7.png" alt="logo" class="img-fluid"></li>
                                    <li class="third">
                                        <img src="/storage/images/8.png" alt="logo" class="img-fluid"></li>
                                    <li class="last">
                                        <img src="/storage/images/5.png" alt="logo" class="img-fluid"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="shareIocns" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modals-title  mb-0" id="exampleModalLabel">Share Project</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icon-x"></i></button>
                </div>
                <div class="modal-body">
                    <ul class="popup-share-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-telegram"></i></a></li>
                        <li><a href="#"><i class="icon-discord"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-comment-icon"></i></a></li>
                        <li><a href="#"><i class="icon-sms-icon"></i></a></li>
                        <li><a href="#"><i class="icon-dabble-arrow"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modals-title  mb-0" id="exampleModalLabel">Connect Wallet</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icon-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-20">Please select a wallet to connect to this marketplace</p>
                    <div class="connect-section">
                        <ul class="heading-list">
                            <li>
                                <a href="#" class="connect-meta">
                                        <span>
                                            <img src="/storage/images/meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                    MetaMask
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span>
                                            <img src="/storage/images/coinbase.png" alt="Coinbase-Image">
                                        </span>
                                    Coinbase
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span>
                                            <img src="/storage/images/trust.png" alt="Trust-Image">
                                        </span>
                                    Trust Wallet
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span>
                                            <img src="/storage/images/wallet.png" alt="Wallet-Image">
                                        </span>
                                    WalletConnect
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>
                        By connecting your wallet, you agree to our
                        <a href="#">
                            <span class="modal-title">Terms of Service </span>
                        </a>
                        and our
                        <a href="#">
                            <span class="modal-title"> Privacy Policy</span>
                        </a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
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
                                            <img src="/storage/images/meta-mask.png" alt="Meta-mask-Image">
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


@stop
