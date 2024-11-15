@extends('main.main')

@section('deposit')
    <style>
        img.img-fluid {
            width: 27px;
        }
        li img{
            width: 28px !important;
            margin-right: 5px;
        }
        .depo .theme-btn {
            padding: 13px 1px;
            /*max-width: 1200px !important;*/
        }
        .item-button{
            margin-top: 18px;
        }
        input[type="number"] {
            border: 2px solid #383945;
            background-color: #151625;
            /* background: #151625; */
            height: 50px;
            margin-top: 10px;
            width: 100%;
            color: #b9babe;
            padding: 18px;
        }
        .depo {
            /*width: 1242px;*/
            /*padding: 8px 87px 20px 81px;*/
            /*padding: 26px 26px;*/
            /*margin-left: 325px;*/
            /*border: 2px solid #383945;*/
            margin-bottom: 80px;
        }
        .flexsunmer{
            display: flex;
            margin-top: 10px;
        }
        @media screen and (max-width: 750px) {
            .depo {
                /*width: 406px;*/
                /*margin-left: 0px;*/
                /*padding: 0px;*/
                /*border: 2px solid #2e2f3c;*/
            }
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
        .kyc_country_dropbox3 {
            max-width: 1200px !important;
        }
        .num{
            max-width: 1200px !important;
        }




        /*3*/
        .kyc_country_drop_list3 {

            width: 100%;
            top: 60px;
            left: 0px;
            z-index: 1;
            display: none;
        }
        .kyc_country_dropbox3  {
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
        .kyc_country_dropbox3 h4 {
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 45px;
            margin-left: 14px;
            margin-bottom: 0px;
            color: rgba(255, 255, 255, 0.7);
        }
        .kyc_country_drop_list3 ul {
            background: #1e1f35;
            max-width: 1200px;
            width: 100%;
            margin-top: -36px;

        }.kyc_country_dropbox3::after {
             content: "\e901";
             position: absolute;
             top: 24px;
             right: 20px;
             color: rgba(255, 255, 255, 0.7);
             font-family: "icomoon";
             font-size: 7px;
         }

        .kyc_country_drop_list3 ul li {
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






    </style>

    <div class="gamfi-breadcrumbs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="breadcrumbs-area sec-heading">
                        <div class="sub-inner mb-15">
                            <a class="breadcrumbs-link" href="/">Home</a>
                            <span class="sub-title">Deposit</span>
                            <img class="heading-left-image" src="/storage/images//steps.png" alt="Steps-Image">
                        </div>
                        <h2 class="title mb-0">Deposit </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container depo">

        <div class="flexsunmer"><div class="sunmmer">
                1
            </div> <div class="texesum">
                Select a coin
            </div></div>
        <div class="kyc_country_dropdown_sect2">
            <!-- 货币选择下拉框 -->
            <div class="kyc_country_dropbox2">
                <span><img src="{{$data[0]['images']}}" alt="flag" class="img-fluid"></span>
                <h4 id="currencyHeader">{{$data[0]['currency']}}</h4>
            </div>
            <div class="kyc_country_drop_list2" style="display: none;">
                <ul id="currencyDropdown">
                    @foreach($data as $v)
                        <li data-currency="{{ $v['currency'] }}" data-image="{{ $v['images'] }}" data-networks="{{ json_encode($v['networks']) }}">
                            <img src="{{$v['images']}}" alt="">{{ $v['currency'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flexsunmer"><div class="sunmmer">
                2
            </div> <div class="texesum">
                Select a networks
            </div></div>
        <div class="kyc_country_dropdown_sect3">
            <!-- 网络选择下拉框 -->
            <div class="kyc_country_dropbox3" id="networkDropdown">
                <h4 id="networkHeader">{{$data[0]['networks'][0]}}</h4> <!-- 默认显示第一个货币的第一个网络 -->
            </div>
            <div class="kyc_country_drop_list3" id="networkDropList" style="display: none;">
                <ul id="networkList">
                    @foreach ($data[0]['networks'] as $network)
                        <li>{{ $network }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flexsunmer"><div class="sunmmer">
                3
            </div> <div class="texesum">
                Purchase quantity
            </div></div>
        <div class="num">
            <input type="number" name="num" placeholder="number">
        </div>
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

        document.addEventListener("DOMContentLoaded", function() {
            const currencyDropdown = document.getElementById('currencyDropdown');
            const networkList = document.getElementById('networkList');
            const networkHeader = document.getElementById('networkHeader');
            const currencyDropList = document.querySelector('.kyc_country_drop_list2');
            const currencyDropbox = document.querySelector('.kyc_country_dropbox2');
            const networkDropList = document.querySelector('.kyc_country_drop_list3');
            currencyDropbox.addEventListener('click', function() {
                const currentDisplay = currencyDropList.style.display;
                currencyDropList.style.display = currentDisplay === 'none' || currentDisplay === '' ? 'block' : 'none';
            });
            currencyDropdown.addEventListener('click', function(e) {
                if (e.target && e.target.tagName === 'LI') {
                    const selectedCurrency = e.target.getAttribute('data-currency');
                    const selectedNetworks = JSON.parse(e.target.getAttribute('data-networks'));
                    const selectedImage = e.target.getAttribute('data-image');
                    currencyDropbox.querySelector('h4').textContent = selectedCurrency;
                    currencyDropbox.querySelector('span img').src = selectedImage;
                    networkHeader.textContent = selectedNetworks[0];
                    networkList.innerHTML = '';
                    selectedNetworks.forEach(function(network) {
                        const li = document.createElement('li');
                        li.textContent = network;
                        networkList.appendChild(li);
                    });
                    currencyDropList.style.display = 'none';

                    networkDropList.style.display = 'none';
                }
            });
            networkDropdown.addEventListener('click', function() {
                const currentDisplay = networkDropList.style.display;
                networkDropList.style.display = currentDisplay === 'none' || currentDisplay === '' ? 'block' : 'none';
            });
            networkList.addEventListener('click', function(e) {
                if (e.target && e.target.tagName === 'LI') {
                    networkHeader.textContent = e.target.textContent;
                    networkDropList.style.display = 'none';
                }
            });
            networkDropList.style.display = 'none';
        });
    </script>
@stop
