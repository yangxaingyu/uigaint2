@extends('main.main')

@section('transfer ')
    <style>
        .aaaa{
            margin-bottom: 80px;
        }
        img.img-fluid {
            width: 27px;
        }
        li img{
            width: 28px !important;
            margin-right: 5px;
        }

        .flexsunmer{
            display: flex;
            margin-top: 10px;
        }
        @media screen and (max-width: 750px) {

            .flexsunmer{
                display: flex;
                margin-top: 10px;
            }
        }
        .texesum{
            margin-left: 10px;
        }
        .sunmmer{
            background-color: #55567a;
            border-radius: 12px;
            width: 24px;
            text-align: center;
        }

        .kyc_country_drop_list2 {

            width: 100%;
            top: 60px;
            left: 0px;
            z-index: 1;
            display: none;
        }
        .kyc_country_dropbox2  {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            height: 60px;
            max-width: 570px;
            width: 100%;
            border: 2px solid rgba(255, 255, 255, 0.15);
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 17px 20px;
            margin-bottom: 35px;
            position: relative;
            cursor: pointer;
            margin-top: 17px;
        }
        .kyc_country_dropbox2 h4 {
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 45px;
            margin-left: 14px;
            margin-bottom: 0px;
            color: rgba(255, 255, 255, 0.7);
        }
        .kyc_country_drop_list2 ul {
            background: #1e1f35;
            max-width: 1200px;
            width: 100%;
            margin-top: -36px;

        }.kyc_country_dropbox2::after {
             content: "\e901";
             position: absolute;
             top: 24px;
             right: 20px;
             color: rgba(255, 255, 255, 0.7);
             font-family: "icomoon";
             font-size: 7px;
         }
         .texbol .theme-btn {
            padding: 13px 1px;
             margin-top: 20px;
        }
        .text-v3PrimaryText {
            margin-top: 10px;
        }
        .kyc_country_drop_list2 ul li {
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 45px;
            color: rgba(255, 255, 255, 0.7);
            height: 42px;
            padding: 0px 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            cursor: pointer;
        }


        .kyc_country_dropbox2 {
            max-width: 1200px !important;
        }
        .texbol{
            width: 680px;
            border: 2px solid #383945;
            padding: 32px;
            margin-left: 200px;
            margin-bottom: 50px;
        }
        input[type="text"] {
            border: 2px solid #383945;
            background-color: #151625;
            /* background: #151625; */
            height: 50px;
            margin-top: 10px;
            width: 100%;
            color: #b9babe;
            padding: 18px;
        }
        .text-v3PrimaryText {
            direction: rtl;
        }






    </style>
    <div class="gamfi-breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="breadcrumbs-area sec-heading">
                    <div class="sub-inner mb-15">
                        <a class="breadcrumbs-link" href="/">Home</a>
                        <span class="sub-title">Transfer</span>
                        <img class="heading-left-image" src="/storage/images//steps.png" alt="Steps-Image">
                    </div>
                    <h2 class="title mb-0">Transfer</h2>
                </div>
            </div>
        </div>
    </div>
    </div>

<div class="container aaaa">

    <div class="flexsunmer"><div class="texesum">
            Select a coin
        </div></div>
    <div class="kyc_country_dropdown_sect2">
        <div class="kyc_country_dropbox2">
            <span><img src="/storage/images/flag.png" alt="flag" class="img-fluid"></span>
            <h4>United States</h4>
        </div>
        <div class="kyc_country_drop_list2" style="display: none;">
            <ul>
                <li><img src="/storage/images/flager.png" alt="">United States</li>
                <li><img src="/storage/images/fcfda5844dcb17d3416221e202dd1266.png">United Kingdom</li>
                <li><img src="/storage/images/flags.png" alt="">Japan</li>
                <li><img src="/storage/images/flagv.png" alt="">China</li>
                <li><img src="/storage/images/flagw.png" alt="">Germany</li>
            </ul>
        </div>
    </div>
    <div class="flexsunmer"> <div class="texesum">
            Transfer amount
        </div></div>
        <div class="num">
            <input type="text" name="num" placeholder="0.000000">

        </div>

    <div class="flex flex-col pt-8px items-end"><div data-v-ed1eae32="" class="text-v3PrimaryText"><span data-v-ed1eae32="" class="w-148px"></span> <span data-v-ed1eae32="" class="text-fs14 break-words text-right w-396px"><span data-v-ed1eae32="" class="text-v3TertiaryText mr-4px">
                        Available:
                    </span> <span data-v-ed1eae32="">
                        0
                    </span> <span data-v-ed1eae32="" class="ml-4px">USDT</span></span></div> <!----></div>


    <div class="item-button">
        <a href="#" class="theme-btn blue">
            <span>Register Account</span>
            <div class="hover-shape1"></div>
            <div class="hover-shape2"></div>
            <div class="hover-shape3"></div>
        </a>
    </div>


</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 初始化下拉框
        const initDropdown = (dropdownSelector, dropdownListSelector) => {
            const dropdown = document.querySelector(dropdownSelector);
            const dropdownList = document.querySelector(dropdownListSelector);
            const options = dropdownList.querySelectorAll('li');
            dropdown.addEventListener('click', function() {
                dropdownList.style.display = dropdownList.style.display === 'none' ? 'block' : 'none';
            });
            options.forEach(option => {
                option.addEventListener('click', function() {
                    const selectedCountry = option.textContent;
                    const selectedImg = option.querySelector('img').src;
                    dropdown.querySelector('h4').textContent = selectedCountry;
                    dropdown.querySelector('span img').src = selectedImg;
                    dropdownList.style.display = 'none';
                });
            });
        };
        initDropdown('.kyc_country_dropbox2', '.kyc_country_drop_list2');
        initDropdown('.kyc_country_dropbox3', '.kyc_country_drop_list3');
    });
</script>



@stop
