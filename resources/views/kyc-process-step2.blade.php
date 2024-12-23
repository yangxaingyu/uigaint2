@extends('main.main')

@section('kyc-process-step2')
    @if (session('message'))
        <script>
            window.onload = function() {
                layer.open({
                    type: 1,
                    skin: 'demo-class',
                    area: ['40%', 'auto'],
                    title: 'Error',
                    shade: 0.6,
                    shadeClose: true,
                    anim: 1,
                    btn: ['Close'],
                    btnAlign: 'c',
                    content: '<div style="text-align: center;padding-top: 15px;">{{ session('message') }}</div>'
                });
            };
        </script>
    @endif
    @if (session('success'))
        <script>
            window.onload = function() {
                layer.open({
                    type: 1,
                    skin: 'demo-class',
                    area: ['40%', 'auto'],
                    title: 'Error',
                    shade: 0.6,
                    shadeClose: true,
                    anim: 1,
                    btn: ['Close'],
                    btnAlign: 'c',
                    content: '<div style="text-align: center;padding-top: 15px;">{{ session('success') }}</div>'
                });
            };
        </script>
    @endif
    <style>
        button.theme-btn.assbutton {
            width: 570px;
        }
    </style>
    <style>
        .kyc_qrcode_content {
            max-width: 450px;
            width: 100%;
        }
        /*.kyc_form .upload_docs_sect .upload-btn-wrapper span{*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*}*/
    </style>
    <div class="gamfi-breadcrumbs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="breadcrumbs-area sec-heading">
                        <div class="sub-inner mb-15">
                            <a class="breadcrumbs-link" href="/">Home</a>
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
                        <form action="/kyc-process-step3" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="upload_docs_sect">
                                <h3>Upload Documents</h3>
                                <ul>
                                    <li>
                                        <div class="upload_btn_bg">
                                            <div class="upload-btn-wrapper">
                                                <span><img id="front-icon" src="/storage/images/uploadFileicon.svg" alt="icon" class="img-fluid"></span>
                                                <input type="file" name="front" id="front" onchange="replaceIcon('front', 'front-icon')" required>
                                            </div>
                                        </div>
                                        <h4>National ID Front</h4>
                                        <div class="preview-container" id="front-preview"></div> <!-- Preview for front -->
                                    </li>

                                    <li>
                                        <div class="upload_btn_bg">
                                            <div class="upload-btn-wrapper">
                                                <span><img id="back-icon" src="/storage/images/uploadFileicon.svg" alt="icon" class="img-fluid"></span>
                                                <input type="file" name="back" id="back" onchange="replaceIcon('back', 'back-icon')" required>
                                            </div>
                                        </div>
                                        <h4>National ID Back</h4>
                                        <div class="preview-container" id="back-preview"></div> <!-- Preview for back -->
                                    </li>
                                    {{--                                <li>--}}
                                    {{--                                    <div class="upload_btn_bg">--}}
                                    {{--                                        <div class="upload-btn-wrapper">--}}
                                    {{--                                            <span><img src="/storage/images/uploadFileicon.svg" alt="icon" class="img-fluid"></span>--}}
                                    {{--                                            <input type="file" name="nid-selfie">--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <h4>Selfie with National ID</h4>--}}
                                    {{--                                </li>--}}
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
                                <input type="text" name="nim" id="nid" placeholder="e.g. 58933699" required>
                            </div>
                            <div class="project-btn-area text-center black-shape-big-custom">
                                <div class="btn_custom"><button type="submit" style=" background-color: transparent;">NEXT STEP</button></div>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="kyc_qrcode_sect">
                        <div class="kyc_qrcode_content">
                            <h4>Q: What is the KYC certification process like? </h4>
                            <p><strong>A:</strong>The KYC certification process generally includes the following steps:</p>
                            <ol>
                                <li>Select Issuing Country. </li>
                                <li>Submit proof of identity or passport or driver's license. </li>
                                <li>Fill in personal information and upload a picture. </li>
                                <li>After submitting complete personal information</li>
                                <li>After completion, you will receive the certification result. </li>
                            </ol>
                            <h2>Q: How long does KYC certification take? </h2>
                            <p><strong>A:</strong>KYC certification usually takes a few hours to a few days, depending on the processing speed and the completeness and clarity of the materials you submit. </p>
                            {{--                        <h2>Q: If I don't have a passport or ID card, can I still do KYC certification? </h2>--}}
                            {{--                        <p>A:KYC certification usually requires submission of valid proof of identity. If you don't have a driver's license or ID card, such as a passport, you can also verify it.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<script src="{{\App\Server\Helper::assets('/js/wow.min.js')}}"></script>--}}
    @if (session('message'))
        <script>
            window.onload = function() {
                layer.open({
                    type: 1,
                    skin: 'demo-class',
                    area: ['40%', 'auto'],
                    title: 'Error',
                    shade: 0.6,
                    shadeClose: true,
                    anim: 1,
                    btn: ['Close'],
                    btnAlign: 'c',
                    content: '<div style="text-align: center;padding-top: 15px;">{{ session('message') }}</div>'
                });
            };
        </script>
    @endif

    <script>
        function replaceIcon(inputId, iconId) {
            const fileInput = document.getElementById(inputId);
            const iconElement = document.getElementById(iconId);

            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    // Update the image source to the uploaded file
                    iconElement.src = event.target.result;
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
@stop
