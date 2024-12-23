@extends('main.main')

@section('deposit')
    <style>
        button.theme-btn.assbutton {
            width: 1176px;
        }
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


        .btn_custom {
            margin-top: 40px;
            font-family: Russo One;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 19px;
            text-align: right;
            text-transform: uppercase;
            color: #FFFFFF;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            max-width: 570px;
            width: 100%;
            background: #6D4AFE;
            height: 60px;
            border: none;
            outline: none;
        }
        @media screen and (min-width: 750px) {
            .btn_custom{
                max-width: 1200px !important;
                width: 1200px !important;

            }

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
    <form action="/depsub" method="post">
    <input type="hidden" name="coid_id" id="selectedCurrency">
    <input type="hidden" name="network_id" id="selectedNetwork">
    @csrf
        <div class="flexsunmer">
            <div class="sunmmer">1</div>
            <div class="texesum">Select a icon</div>
        </div>
        <div class="kyc_country_dropbox2" onclick="toggleDropdown('currencyDropdown')">
            <span><img src="/uploads/{{$data[0]['icon']}}" alt="coin icon" class="img-fluid"></span>
            <h4 id="currencyHeader">{{$data[0]['name']}}</h4>
        </div>
        <div class="kyc_country_drop_list2" style="display: none;" id="currencyDropdown">
            <ul>
                @foreach($data as $v)
                    <li data-currency="{{ $v['name'] }}"
                        data-image="/uploads/{{ $v['icon'] }}"
                        data-networks="{{ json_encode($v['networks']) }}"
                        data-addresses="{{ json_encode($v['addresses']) }}"
                        onclick="selectCurrency('{{ $v['name'] }}', '/uploads/{{ $v['icon'] }}', {{ json_encode($v['addresses']) }})">
                        <img src="/uploads/{{$v['icon']}}" alt="">{{ $v['name'] }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="flexsunmer">
            <div class="sunmmer">2</div>
            <div class="texesum">Select a network</div>
        </div>
        <div class="kyc_country_dropdown_sect3">
            <div class="kyc_country_dropbox3" id="networkDropdown" onclick="toggleDropdown('networkDropList')">
                <h4 id="networkHeader">Select a network</h4>
            </div>
            <div class="kyc_country_drop_list3" id="networkDropList" style="display: none;">
                <ul id="networkList">
                </ul>
            </div>
        </div>
        <div class="address">
            <input type="text" id="addressField" placeholder="Select a coin and network" readonly>
        </div>



        <div class="flexsunmer"><div class="sunmmer">
            3
        </div> <div class="texesum">
            Purchase quantity
        </div></div>
    <div class="num">
        <input type="number" name="amount" placeholder="quantity">
    </div>
    <div class="project-btn-area text-center black-shape-big-custom">
        <div class="btn_custom"><button type="submit" style=" background-color: transparent;">top up</button></div>
    </div>
</form>
    </div>
    <script>
        let selectedCurrencyData = null;

        // 在页面加载时默认选择第一个货币和网络
        window.onload = function() {
            // 自动选择第一个货币
            const firstCurrency = document.querySelector('.kyc_country_drop_list2 li');
            if (firstCurrency) {
                const currencyName = firstCurrency.getAttribute('data-currency');
                const currencyIcon = firstCurrency.getAttribute('data-image');
                const addresses = JSON.parse(firstCurrency.getAttribute('data-addresses'));
                selectCurrency(currencyName, currencyIcon, addresses);

                // 自动选择第一个网络
                const firstNetwork = Object.keys(addresses)[0];
                if (firstNetwork) {
                    selectNetwork(firstNetwork);
                }
            }
        };

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            dropdown.style.display = dropdown.style.display === 'none' || dropdown.style.display === '' ? 'block' : 'none';
        }

        function selectCurrency(currencyName, currencyIcon, addresses) {
            // 更新货币的header和图标
            document.getElementById('currencyHeader').textContent = currencyName;
            document.querySelector('.kyc_country_dropbox2 span img').src = currencyIcon;
            selectedCurrencyData = addresses;
            document.getElementById('currencyDropdown').style.display = 'none';
            document.getElementById('networkDropList').style.display = 'none';
            const networkList = document.getElementById('networkList');
            networkList.innerHTML = '';
            Object.keys(addresses).forEach(function(network) {
                const li = document.createElement('li');
                li.textContent = network;
                li.setAttribute('data-network', network);
                li.onclick = function() {
                    selectNetwork(network);
                };
                networkList.appendChild(li);
            });
            document.getElementById('networkDropList').style.display = 'none';
            document.getElementById('selectedCurrency').value = currencyName;
        }

        function selectNetwork(network) {
            const address = selectedCurrencyData[network] || 'No address available';
            document.getElementById('networkHeader').textContent = network;
            document.getElementById('addressField').value = address;
            document.getElementById('networkDropList').style.display = 'none';

            // 更新隐藏字段的值（设置选中的网络ID）
            document.getElementById('selectedNetwork').value = network;
        }

        document.getElementById('myForm').addEventListener('submit', function(event) {
            // 可以根据需要在这里进行调试
            console.log("Selected Currency: ", document.getElementById('currencyHeader').textContent);
            console.log("Selected Network: ", document.getElementById('networkHeader').textContent);
            console.log("Selected Address: ", document.getElementById('addressField').value);
            const currency = document.getElementById('currencyHeader').textContent;
            const network = document.getElementById('networkHeader').textContent;
            if (!currency || !network) {
                alert('Please select a currency and network before submitting!');
                event.preventDefault();
            }
        });
    </script>

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

@stop
