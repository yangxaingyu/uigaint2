@extends('main.main')

@section('kyc-process-step3')
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
                    <h2>Step 3 of 3</h2>
                    <div class="gamfi_header_progress_bar">
                        <div class="progress">
                            <div class="progress-bar w-100 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                <div class="kyc_form kyc_persoanl_info_form">
                    <h3>Personal Information</h3>
                    <form action="/" method="post">
                        <div class="input__group__between">
                            <div class="input__group mb-23">
                                <label>First Name</label>
                                <input type="text" name="f-name" id="f-name" placeholder="e.g. Smith">
                            </div>
                            <div class="input__group mb-23">
                                <label>Last Name</label>
                                <input type="text" name="l-name" id="l-name" placeholder="e.g. Smith">
                            </div>
                        </div>
                        <div class="input__group mb-23">
                            <label>State/Provience</label>
                            <input type="text" name="provience" id="provience" placeholder="e.g. California">
                        </div>
                        <div class="input__group__between">
                            <div class="input__group mb-23">
                                <label>Address line 1</label>
                                <input type="text" name="address-1" id="address-1" placeholder="e.g. 645 E Shaw Ave">
                            </div>
                            <div class="input__group mb-23">
                                <label>Address line 2</label>
                                <input type="text" name="address-2" id="address-2" placeholder="e.g. Fresno, CA 93710">
                            </div>
                        </div>
                        <div class="input__group__between">
                            <div class="input__group mb-23">
                                <label>City</label>
                                <input type="text" name="city" id="city" placeholder="e.g. New York">
                            </div>
                            <div class="input__group mb-23">
                                <label>Post Code</label>
                                <input type="text" name="post-code" id="post-code" placeholder="e.g. 4455">
                            </div>
                        </div>
                        <div class="kyc_term_and_condtion_sect">
                            <label class="container">
                                I accept the
                                <a href="#">Term of Conditions</a>
                                and
                                <a href="#">Privacy Policy</a>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="item-button">
                            <a href="index.html" class="theme-btn blue">
                                <span>Submit KYC</span>
                                <div class="hover-shape1"></div>
                                <div class="hover-shape2"></div>
                                <div class="hover-shape3"></div>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="kyc_your_documents_sect">
                    <div class="kyc_your_documents_content">
                        <h3>Your Documents</h3>
                        <ul>
                            <li>
                                <p>
                                            <span>
                                                <img src="/storage/images/iconLink.svg" alt="icon" class="img-fluid">
                                            </span>
                                    NID_front.JPG
                                </p>
                                <span class="Downloadicon">
                                            <img src="/storage/images/icon_download.svg" alt="icon" class="img-fluid">
                                        </span>
                            </li>
                            <li>
                                <p>
                                            <span><img src="/storage/images/iconLink.svg" alt="icon" class="img-fluid">
                                            </span>
                                    NID_back.JPG
                                </p>
                                <span class="Downloadicon">
                                            <img src="/storage/images/icon_download.svg" alt="icon" class="img-fluid">
                                        </span>
                            </li>
                            <li>
                                <p>
                                            <span>
                                                <img src="/storage/images/iconLink.svg" alt="icon" class="img-fluid">
                                            </span>
                                    Selfie_with_NID.JPG
                                </p>
                                <span class="Downloadicon">
                                            <img src="/storage/images/icon_download.svg" alt="icon" class="img-fluid">
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
