@extends('main.main')

@section('forget-password')

<div class="loader_first" style="display: none;">
    <div class="circular-spinner"></div>
</div>
<div class="account__area">
    <div class="account-bg"></div>
    <div class="container">
        <div class="account__content">
            <div class="account__form">
                <div class="account__title mb-29">
                    <h2>reset Password</h2>
                    <h3>We’ll send you an email with a link to reset the Password to your account</h3>
                </div>
                <form action="/" method="post">
                    <div class="input__group mb-40">
                        <label>Email address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="item-button">
                        <a href="index.html" class="theme-btn blue">
                            <span>Get Reset Link</span>
                            <div class="hover-shape1"></div>
                            <div class="hover-shape2"></div>
                            <div class="hover-shape3"></div>
                        </a>
                    </div>
                </form>
                <div class="item-bottom mt-40">
                    <h4>
                        Remember your password ?
                        <a href="/signin">Sign in now !</a>
                    </h4>
                </div>
            </div>
            <div class="account-shadow"></div>
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
                                            <img src="assets/images/icons/meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                MetaMask
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="assets/images/icons/coinbase.png" alt="Coinbase-Image">
                                        </span>
                                Coinbase
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="assets/images/icons/trust.png" alt="Trust-Image">
                                        </span>
                                Trust Wallet
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="assets/images/icons/wallet.png" alt="Wallet-Image">
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
                                            <img src="assets/images/icons/meta-mask.png" alt="Meta-mask-Image">
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
