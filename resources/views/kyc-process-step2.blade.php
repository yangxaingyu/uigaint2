@extends('main.main')

@section('kyc-process-step2')

<div class="gamfi-breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="breadcrumbs-area sec-heading">
                    <div class="sub-inner mb-15">
                        <a class="breadcrumbs-link" href="index.html">Home</a>
                        <span class="sub-title">KYC FORM</span>
                        <img class="heading-left-image" src="/storage/images/steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title mb-0">Submit KYC</h2>
                </div>
            </div>
            <div class="col-lg-7 breadcrumbs-form breadcrumbs_progress_bar_custom md-mt-40">
                <div class="gamfi_header_content_right">
                    <h2>Step 2 of 3</h2>
                    <div class="gamfi_header_progress_bar">
                        <div class="progress">
                            <div class="progress-bar w-75 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <form action="/" method="post">
                        <div class="upload_docs_sect">
                            <h3>Upload Documents</h3>
                            <ul>
                                <li>
                                    <div class="upload_btn_bg">
                                        <div class="upload-btn-wrapper">
                                            <span><img src="/storage/images/uploadFileicon.svg" alt="icon" class="img-fluid"></span>
                                            <input type="file" name="nid-front">
                                        </div>
                                    </div>
                                    <h4>National ID Front</h4>
                                </li>
                                <li>
                                    <div class="upload_btn_bg">
                                        <div class="upload-btn-wrapper">
                                            <span><img src="/storage/images/uploadFileicon.svg" alt="icon" class="img-fluid"></span>
                                            <input type="file" name="nid-back">
                                        </div>
                                    </div>
                                    <h4>National ID Back</h4>
                                </li>
                                <li>
                                    <div class="upload_btn_bg">
                                        <div class="upload-btn-wrapper">
                                            <span><img src="/storage/images/uploadFileicon.svg" alt="icon" class="img-fluid"></span>
                                            <input type="file" name="nid-selfie">
                                        </div>
                                    </div>
                                    <h4>Selfie with National ID</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="upload_doc_check_list">
                            <ul>
                                <li>
                                            <span>
                                                <img src="/storage/images/checkicon.svg" alt="icon" class="img-fluid">
                                            </span>
                                    File accepted: JPEG/JPS/PNG (Max size: 250 KB
                                </li>
                                <li class="active">
                                            <span>
                                                <img src="/storage/images/checkicon.svg" alt="icon" class="img-fluid">
                                            </span>
                                    Document should be good condition
                                </li>
                                <li>
                                            <span>
                                                <img src="/storage/images/checkicon.svg" alt="icon" class="img-fluid">
                                            </span>
                                    Document must be valid period
                                </li>
                                <li>
                                            <span>
                                                <img src="/storage/images/checkicon.svg" alt="icon" class="img-fluid">
                                            </span>
                                    Face must be clear visible
                                </li>
                                <li class="mb-0">
                                            <span>
                                                <img src="/storage/images/checkicon.svg" alt="icon" class="img-fluid">
                                            </span>
                                    Not has today’s date
                                </li>
                            </ul>
                        </div>
                        <div class="input__group mb-40">
                            <label>National ID Number</label>
                            <input type="text" name="nid" id="nid" placeholder="e.g. 58933699">
                        </div>
                        <div class="item-button">
                            <a href="kyc-process-step3.html" class="theme-btn blue">
                                <span>Next step</span>
                                <div class="hover-shape1"></div>
                                <div class="hover-shape2"></div>
                                <div class="hover-shape3"></div>
                            </a>
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
{{--<script src="{{\App\Server\Helper::assets('/js/wow.min.js')}}"></script>--}}
@stop
