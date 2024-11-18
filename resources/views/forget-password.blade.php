@extends('main.main')

@section('forget-password')
    @if (session('error'))
        <script>  alert('{{ session('error.message') }}')</script>
    @endif
    <style>
        button.theme-btn.assbutton {
            width: 570px;
        }
    </style>
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
                <form action="/uppwd" method="post">
                    @csrf
                    <div class="input__group mb-40">
                        <label>Email address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="input__group mb-40">
                        <label>Email address</label>
                        <input type="text" name="password" id="password" placeholder="Enter your re_password">
                    </div>
                    <div class="input__group mb-40">
                        <label>Email address</label>
                        <input type="text" name="re_password" id="re_password" placeholder="Enter your re_password">
                    </div>
                    <div class="project-btn-area text-center black-shape-big-custom">
                        <div class="btn_custom"><button type="submit" style=" background-color: transparent;">Next step</button></div>

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
