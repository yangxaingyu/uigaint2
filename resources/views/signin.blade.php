@extends('main.main')

@section('signin')

<div class="loader_first" style="display: none;">
    <div class="circular-spinner"></div>
</div>
<!--Preloader area End here-->

<!-- account section start -->
<div class="account__area">
    <div class="account-bg"></div>
    <div class="container">
        <div class="account__content">
            <div class="account__form">
                <div class="account__title mb-29">
                    <h2>log In</h2>
                    <h3>Inter your email address and password to get access your account</h3>
                </div>
                <form action="/" method="post">
                    <div class="input__group mb-23">
                        <label>Email address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="input__group mb-23">
                        <label>Password</label>
                        <input type="password" name="pass" id="pass" placeholder="Enter your password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="item-text mb-28">
                            <input type="checkbox" name="accept" id="accept">
                            <label for="accept">Remember me</label>
                        </div>
                        <div class="item-text mb-28">
                            <a href="forget-password">Forget Password ?</a>
                        </div>
                    </div>
                    <div class="item-button">
                        <a href="index.html" class="theme-btn blue">
                            <span>Sign in</span>
                            <div class="hover-shape1"></div>
                            <div class="hover-shape2"></div>
                            <div class="hover-shape3"></div>
                        </a>
                    </div>
                </form>
                <div class="item-bottom mt-31">
                    <h4>
                        Don’t have an account ?
                        <a href="/reg">Sign up now !</a>
                    </h4>
                </div>
            </div>
            <div class="account-shadow"></div>
        </div>
    </div>
</div>
<!-- account section END -->

<!-- Footer Section Start -->
<Footer></Footer>
<!-- Footer Section End -->

<!-- Modal Section Start-->
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
                                            <img src="/storage/images/icons/meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                MetaMask
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="/storage/images/icons/coinbase.png" alt="Coinbase-Image">
                                        </span>
                                Coinbase
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="/storage/images/icons/trust.png" alt="Trust-Image">
                                        </span>
                                Trust Wallet
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="/storage/images/icons/wallet.png" alt="Wallet-Image">
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
                                            <img src="/storage/images/icons/meta-mask.png" alt="Meta-mask-Image">
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
