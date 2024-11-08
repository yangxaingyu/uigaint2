@extends('main.main')

@section('kyc-process')
<div class="gamfi-breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="breadcrumbs-area sec-heading">
                    <div class="sub-inner mb-15">
                        <a class="breadcrumbs-link" href="index.html">Home</a>
                        <span class="sub-title">KYC FORM</span>
                        <img class="heading-left-image" src="/storage/images//steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title mb-0">Submit KYC</h2>
                </div>
            </div>
            <div class="col-lg-7 breadcrumbs-form breadcrumbs_progress_bar_custom md-mt-40">
                <div class="gamfi_header_content_right">
                    <h2>Step 1 of 3</h2>
                    <div class="gamfi_header_progress_bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="kyc_form_sect">
    <div class="container">
        <div class="row m-0">
            <div class="col-md-6 p-0">
                <div class="kyc_form">
                    <form method="POST" action="/kyc-process-step2">
                            @csrf
                    <h3>Issuing Country/Region</h3>
                    <div class="kyc_country_dropdown_sect">
                        <div class="kyc_country_dropbox">
                            <span><img src="/storage/images/flag.png" alt="flag" class="img-fluid"></span>
                            <h4>United States</h4>
                        </div>
                        <div class="kyc_country_drop_list" style="display: none;">
                            <ul>
                                <li>United States</li>
                                <li>United Kingdom</li>
                                <li>Japan</li>
                                <li>China</li>
                                <li>Germany</li>
                            </ul>
                        </div>
                    </div>
                    <h3>Select Identity Type</h3>
                    <p>Should be your government issued photo identity</p>

                        <div class="kyc_radio_sect">
                            <div class="kyc_radio_btn nid_btn">
                                <label class="container">National ID
                                    <input type="radio" name="kyc_option" value="national_id">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="kyc_icon">
                                    <img src="/storage/images/nid-icon.svg" alt="icon" class="img-fluid">
                                </div>
                            </div>
                            <div class="kyc_radio_btn passport_btn active">
                                <label class="container">Passport
                                    <input type="radio" name="kyc_option" value="passport" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="kyc_icon">
                                    <img src="/storage/images/pasport_icon.svg" alt="icon" class="img-fluid">
                                </div>
                            </div>
                            <div class="kyc_radio_btn driving_licnse_btn">
                                <label class="container">Driver’s License
                                    <input type="radio" name="kyc_option" value="driver_license">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="kyc_icon">
                                    <img src="/storage/images/licence-icon.svg" alt="icon" class="img-fluid">
                                </div>
                            </div>
                        </div>


                        <div class="project-btn-area text-center black-shape-big-custom">
                               <div class="btn_custom"><button type="submit" style=" background-color: transparent;">Next step</button></div>

                           </div>
                   </form>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="kyc_qrcode_sect">
                    <div class="kyc_qrcode_content">
                        <h2>Want to continue with SmArt Phone ?</h2>
                        <div class="kyc_qrcode_img">
                            <img src="/storage/images/QRcode.png" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
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
                                            <img src="/storage/images//meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                MetaMask
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="/storage/images//coinbase.png" alt="Coinbase-Image">
                                        </span>
                                Coinbase
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="/storage/images//trust.png" alt="Trust-Image">
                                        </span>
                                Trust Wallet
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                        <span>
                                            <img src="/storage/images//wallet.png" alt="Wallet-Image">
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
                                            <img src="/meta-mask.png" alt="Meta-mask-Image">
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


{{--<script src="{{\App\Server\Helper::assets('/js/wow.min.js')}}"></script>--}}
@stop
