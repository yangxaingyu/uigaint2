@extends('main.main')

@section('user')
    <style>

        @media (max-width: 768px) {

            .profile-info-item.mr40.mt24.d-flex.flex-col {
                padding: 0px 40px;
            }

            .profile-nickname-wrap.mr56 {
                padding-left: 40px;
            }

            .h416 {
                width: 100% !important;
            }

            .user-other-info.d-flex.flex-wrap {
                display: none !important;
            }

            .info-module.info-module-half.d-flex.flex-col.h416 {
                width: 100% !important;
            }

        }


        .gamfi-footer-section {
            margin-top: 50px;
        }

        .profile-avatar-wrap {
            width: 120px;
            flex-shrink: 0;

        }

        .account-settings-container .user-info {
            display: flex;
            position: relative;
            margin-bottom: 5px;
        }

        .profile-other-wrap {
            display: flex;
            flex-direction: column;
            width: 100%;
            z-index: 2;
        }

        .user-tag-wrap {
            display: flex;
            justify-content: flex-end;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .d-flex {
            display: flex;
        }

        span.user-info-val {
            height: 60px;
        }


        .two2 {
            display: flex !important;
            grid-gap: 15px;
        }

        .profile-info-item.mr40.mt24.d-flex.flex-col {
            padding: 0px 80px;
        }

        .profile-nickname-wrap.mr56 {
            padding-left: 80px;
        }

        .info-module-half {
            display: inline-flex;
            width: 100%;
            box-sizing: border-box;
        }

        .info-module {

            padding: 24px !important;
        }

        .h416 {
            background: rgba(30, 31, 53, 0.8);
            width: 50% !important;
        }

        .flex-col {
            flex-direction: column;
        }

        .profile-card-head-wrapper {
            display: flex;
            align-items: center;
        }

        .two2 {
            width: 100% !important;
        }

        .identity-card-content .identityVerificationBgImg {
            width: 240px;
            height: 240px;
            margin-right: 48px;
            background-image: url(/storage/images/identity_verification_bg_light.png);
            background-size: contain;
            background-repeat: no-repeat;

        }

        .info-module-half {
            display: inline-flex;
            width: 100%;
            box-sizing: border-box;
        }

        .identity-card-title {
            font-weight: 600;
            font-size: 21px;
            max-width: 312px;
            margin-bottom: 0 !important;
            margin-top: 32px !important;
        }

        .identity-card-content {
            display: flex !important;
        }

        .profile-card-head-title {
            display: inline-block;
            flex: 1;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-size: 24px;
            line-height: 24px;

            font-weight: 500;
        }

        .individual-btn {
            background: #2354e6 !important;
            border-radius: 20px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 16px;
            line-height: 16px;

        }


        .profile-card-head-wrapper {
            display: flex;
            align-items: center;
        }

        .security-safety-strength {
            margin-top: 16px;
            display: flex;
            align-items: center;
            font-size: 14px;
            line-height: 14px;
            color: var(--nftColorGray4);
        }

        .security-step-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            flex-flow: row wrap;
        }

        .security-step-wrap .security-setp-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #eef1fa;
            /*background: #eef1fa;*/
            padding: 26px 24px;
            height: 133px;
            border-radius: 8px;
            overflow: visible;
            position: relative;
            flex: 0 0 calc(50% - 12px);
            margin-top: 24px;
        }

        .security-setp-item .step-item-btn {
            padding: 8px 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            line-height: 16px;
            font-weight: 600;
            margin-top: 24px;
            background: #eef1fa;
            border-radius: 20px;
            color: black !important;
        }

        .step-item-btn a {
            color: black !important;
        }

        a:hover {
            color: #fff;
        }
        .ellipsis{
            display: contents !important;
        }


        .history-list-item {
            display: flex;
            justify-content: space-between;
            padding: 21px 0;
            align-items: center;
        }

        .info-module {
            background: rgba(30, 31, 53, 0.8);
            margin-top: 10px;
        }
        span.user-info-title {
            margin-left: 180px;
        }


        .two3 {
            display: flex;
            grid-gap: 15px;
        }

        @media (max-width: 768px) {
            .identity-card-content .identityVerificationBgImg {
                margin-right: 0px;
            }

            .two2 {
                display: contents !important;

            }

            .two3 {
                display: contents !important;
            }

            .identity-card-content .identityVerificationBgImg {
                width: 309px !important;
                height: 169px !important;
            }

            .identity-card-title {
                font-size: 14px !important;
            }
            /*.flex-space-between{*/
            /*    display: contents !important;*/
            /*}*/
            span#staked-balance {
                font-size: 23px !important;
            }
            span#total-balance {
                font-size: 23px !important;
            }
            span.hidden-funds-num.aaaaavvvv {
                font-size: 15px;
            }

        }

        .overview-main {
            background: var(--color-bg-3) !important;
            border-radius: 8px;
            padding-bottom: 32px;
            position: relative;
            margin: 0 !important;
            border: none;
        }


        .flex-space-between {
            display: flex;
            justify-content: space-between;
        }

        .funds-valuation > div.valuation-total, .content-flex-start > div.valuation-total {
            margin-top: 32px;
            flex: 1;
        }

        .funds-valuation > div.valuation-total.myfunds-valuation-total {
            flex: auto;
        }

        .valuation-text {
            font-weight: 400;
            color: var(--color-text-3);
            font-size: 14px;
            line-height: 14px;
        }

        .funds-valuation > div.valuation-total {
            margin-right: 12px;
        }

        .valuation-detail {
            display: flex;
            align-items: baseline;
            max-width: 100%;
        }

        .funds-valuation > div.valuation-profit, .content-flex-start > div.valuation-profit {
            margin-top: 32px;
            flex: 1;
        }


        select#currency-select {
            background-color: #1c1d31;
            color: #b4b5bb;
            width: 91px;
            border: 2px solid #ededf3;
            border-radius: 11px;
            margin-top: 20px;
            padding: 10px;
        }

        .tablab{
            display:inline-grid !important;
        }

    </style>

    <div class="container">
        <div id="root">
            <div class="account-settings-container">
                <div class="user-info info-module">
                    <div class="profile-avatar-wrap"><span class="gui-font-face"><div
                                class="profile-avatar-img-wrap"><div
                                    class="avatar-change-wrap"><img src="{{$user['images']}}"
                                                                    alt=""></div></div></span></div>
                    <div class="profile-other-wrap">
                        <div class="user-tag-wrap"><a class="profile-btn" href="/myaccount/settings"
                                                      data-click-event="account_center_user_info_click"
                                                      data-collect-params="{&quot;button_name&quot;:&quot;Profile&quot;}">User
                                Information</a>
                        </div>
                        <div class="user-other-info d-flex flex-wrap">
                            <div class="profile-nickname-wrap mr56"><span class="greet-tip mb16 ">Hello，</span><span
                                    class="user-info-val user-nickname "><span><span
                                            class="max212 ellipsis user-nickname-val">{{$data['first_name'].$data['first_name']}}</span></span><path
                                        d="M15.9587 10.7658L7.62474 18.9999H4.49951V15.9121L12.8335 7.67804L15.9587 10.7658ZM18.4255 8.32853L16.7921 9.94242L13.6668 6.85463L15.3003 5.24074C15.3774 5.16441 15.469 5.10385 15.5698 5.06253C15.6706 5.02121 15.7787 4.99994 15.8878 4.99994C15.997 4.99994 16.1051 5.02121 16.2059 5.06253C16.3067 5.10385 16.3983 5.16441 16.4754 5.24074L18.4255 7.16752C18.7506 7.48865 18.7506 8.0074 18.4255 8.32853ZM12.0001 17.3539H19.5006V19.0008H10.3333L12.0001 17.3539Z"
                                        fill="#04091A"></path>
                                    </svg></span></div>
                            {{--                            <div class="profile-info-item mr40 mt24 d-flex flex-col"><span--}}
                            {{--                                    class="user-info-title">username</span><span class="user-info-val"><span><span--}}
                            {{--                                            class="ellipsis profile-max-nickname">{{$data['email']}}</span></span><img--}}
                            {{--                                        class="userinfo-vip-tag" src="/images/my_account/vip/vip-0.svg?v=20230606"--}}
                            {{--                                        alt=""></span></div>--}}

                            <div class="profile-info-item mr40 mt24 d-flex flex-col profile-max-email ellipsis"><span
                                    class="user-info-title">Mail：</span><span><span
                                        class="user-info-val ellipsis profile-max-email">{{$data['email']}}</span></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="two2">
                    <div class="info-module info-module-half d-flex flex-col h416">
                        <div class="profile-card-head-wrapper">
                            <div class="profile-card-head-title">Identity Authentication</div>
                            <div class="profile-card-extra"><a target="_self" href="/zh/myaccount/kyc_home"
                                                               data-click-event="account_center_identify_verification_click"
                                                               data-collect-params="{&quot;button_name&quot;:&quot;More&quot;}">More

                                </a></div>
                        </div>

                        @if($user['kyc_status']==1)
                            <div class="identity-card-content"><p class="identity-card-title">
                                    Congratulations, you have completed the real-name authentication of our website!</p>
                                <div class="identityVerificationBgImg"></div>
                            </div>
                            <div class="identity-card-footer"><a
                                    class="individual-btn" href="#"
                                    data-click-event="account_center_identify_verification_click"
                                    data-collect-params="{&quot;button_name&quot;:&quot;IndividualVerification&quot;}">已认证</a>
                            </div>

                        @else
                            <div class="identity-card-content"><p class="identity-card-title">
                                    Completing real-name authentication can unlock more features</p>
                                <div class="identityVerificationBgImg"></div>
                            </div>
                            <div class="identity-card-footer"><a
                                    class="individual-btn" href="/kyc-process"
                                    data-click-event="account_center_identify_verification_click"
                                    data-collect-params="{&quot;button_name&quot;:&quot;IndividualVerification&quot;}">个人认证</a>
                            </div>
                        @endif
                    </div>
                    <div class="info-module info-module-half d-flex flex-content-between flex-col h416">
                        <div>
                            <div class="profile-card-head-wrapper tablab">
                                <div class="profile-card-head-title blabla">Assets</div>
                                {{--                        <span>Assets:</span>--}}
                                @if(isset($val['coin_id']))

                                    <select id="currency-select" onchange="updateCurrencyInfo()">
                                        @foreach($balance as $val)
                                            <option value="{{$val['coin_id']}}"
                                                    data-balance="{{$val['balance']}}"
                                                    data-staked="{{$val['staked_balance']}}">{{$val['coin_id']}}</option>
                                        @endforeach

                                    </select>

                                @else
                                @endif

                            </div>
                            <div class="history-card-content">


                                <div class="overview-main">
                                    <div class="funds-valuation d-flex flex-space-between">
                                        {{--                            @foreach($balance as $val)--}}


                                        <div class="valuation-total myfunds-valuation-total">
                                            <div class="valuation-text">
                                                资产总估值
                                            </div>
                                            <div class="valuation-detail">
                                                <div id="valuation-total-funds">
                                                    @if(isset($balance[0]['balance']))

                                                        <span class="hidden-funds-num" id="total-balance" data-value="0.00" style="white-space: nowrap; font-size: 32px;">{{$balance[0]['balance']}}</span>

                                                    @else
                                                        <span class="hidden-funds-num" id="total-balance" data-value="0.00" style="white-space: nowrap; font-size: 32px;">0.0000</span>
                                                    @endif
{{--                                                    <span class="hidden-funds-num" id="total-balance" data-value="0.00" style="white-space: nowrap; font-size: 32px;">{{$balance[0]['balance']}}</span>--}}
                                                </div>
                                                {{--                                        <select id="currency-select" onchange="updateCurrencyInfo()">--}}
                                                {{--                                            @foreach($balance as $val)--}}
                                                {{--                                                <option value="{{$val['coin_id']}}"--}}
                                                {{--                                                        data-balance="{{$val['balance']}}"--}}
                                                {{--                                                        data-staked="{{$val['staked_balance']}}">{{$val['coin_id']}}</option>--}}
                                                {{--                                            @endforeach--}}
                                                {{--                                        </select>--}}
                                            </div>
                                            <div class="valuation-exchange">
                                                <span class="hidden-funds-num" data-value="">≈0.000000 BTC</span>
                                            </div>
                                            <span class="valuation-analysis-funds-tips">
                            </span>
                                        </div>

                                        <div class="valuation-profit">
                                            <div class="valuation-text">质押货币</div>
                                            <div id="valuation-detail-funds" class="valuation-detail">
                                                <div class="valuation-detail-value red">
                      @if(isset($balance[0]['staked_balance']))

                                                        <span class="hidden-funds-num rate-funds-num" id="staked-balance"
                                                              data-value="0.00"
                                                              style="white-space: nowrap; font-size: 32px;">{{$balance[0]['staked_balance']}} </span>

                                                    @else
                                                        <span class="hidden-funds-num rate-funds-num" id="staked-balance"
                                                              data-value="0.00"
                                                              style="white-space: nowrap; font-size: 32px;">0.0000 </span>


                      @endif
                                                    {{--                                            <select id="currency-select" onchange="updateCurrencyInfo()">--}}
                                                    {{--                                                @foreach($balance as $val)--}}
                                                    {{--                                                    <option value="{{$val['coin_id']}}"--}}
                                                    {{--                                                            data-balance="{{$val['balance']}}"--}}
                                                    {{--                                                            data-staked="{{$val['staked_balance']}}">{{$val['coin_id']}}</option>--}}
                                                    {{--                                                @endforeach--}}
                                                    {{--                                            </select>--}}
                                                </div>
                                            </div>
                                            <div class="valuation-exchange">
                                                <span class="hidden-funds-num  aaaaavvvv" data-value="">≈0.000000 BTC</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                            @endforeach--}}
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="two3">
            <div class="info-module info-module-half d-flex flex-content-between flex-col h496">
                <div>
                    <div class="profile-card-head-wrapper">
                        <div class="profile-card-head-title">Pledge Record</div>
                        <div class="profile-card-extra"><a target="_blank" href="/zh/myaccount/mylogs"
                                                           data-click-event="account_center_recent_login_click"
                                                           data-collect-params="{&quot;button_name&quot;:&quot;History&quot;}">Record

                            </a></div>
                    </div>
                  @if(isset($value['mining_pool_id']))

                        @foreach($stake as $value)

                            <div class="history-card-content"><a class="history-list-item">
                                    <div class="list-item-left">
                                        <div class="type">{{$value['mining_pool_id']}}</div>
                                        <div class="location">{{$value['coin_id']}}</div>
                                    </div>
                                    <div class="list-item-right">
                                        <div class="ip-address">{{$value['amount']}}</div>
                                        <div class="time ellipsis">{{$value['end_date']}}</div>

                                    </div>
                                </a></div>
                        @endforeach
                    @else
                        <div class="history-card-content"><a class="history-list-item">
                                <div class="list-item-left">
                                <span>No records yet</span>
                                </div>
                            </a></div>
                  @endif
                </div>
            </div>
            <div class="info-module info-module-half d-flex flex-content-between flex-col h496">
                <div>
                    <div class="profile-card-head-wrapper">
                        <div class="profile-card-head-title">Security Verification</div>
                        <div class="profile-card-extra"><a target="_self" href="#">More

                            </a></div>
                    </div>
                    <div class="security-card-content">

                        <ul class="security-step-wrap">
                            <li class="security-setp-item ">
                                <div class="step-item-title">Wallet Balance</div>
                                <div class="step-item-btn "><a href="/zh/myaccount/security-setting"
                                                               data-click-event="account_center_security_verification_click"
                                                               data-collect-params="{&quot;button_name&quot;:&quot;Login2StepVerification&quot;}">修改</a>
                                </div>
                                <img class="step-item-complete-tag" src="/images/my_account/complete-tag.svg"
                                     alt=""></li>
                            <li class="security-setp-item ">
                                <div class="step-item-title">身份认证</div>
                                <div class="step-item-btn "><a href="/zh/myaccount/kyc_home"
                                                               data-click-event="account_center_security_verification_click"
                                                               data-collect-params="{&quot;button_name&quot;:&quot;IdentifyVerification&quot;}">立即认证</a>
                                </div>
                            </li>
                            <li class="security-setp-item ">
                                <div class="step-item-title">个人信息</div>
                                <div class="step-item-btn "><a href="/zh/myaccount/security-setting"
                                                               data-click-event="account_center_security_verification_click"
                                                               data-collect-params="{&quot;button_name&quot;:&quot;GoogleAuthenticator&quot;}">去绑定</a>
                                </div>
                            </li>
                            <li class="security-setp-item ">
                                <div class="step-item-title">个人信息</div>
                                <div class="step-item-btn "><a href="/zh/myaccount/security-setting"
                                                               data-click-event="account_center_security_verification_click"
                                                               data-collect-params="{&quot;button_name&quot;:&quot;AntiPhishingCode&quot;}">设置</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // 当页面加载完成后，执行此函数来设置初始显示值
        window.onload = function() {
            updateCurrencyInfo(); // 调用这个函数更新初始的余额和 staked_balance
        };

        function updateCurrencyInfo() {
            // 获取选中的货币
            var selectElement = document.getElementById("currency-select");
            var selectedOption = selectElement.options[selectElement.selectedIndex];

            // 获取对应的 balance 和 staked_balance
            var balanceValue = selectedOption.getAttribute("data-balance");
            var stakedBalanceValue = selectedOption.getAttribute("data-staked");

            // 更新 balance span 的内容和 data-value 属性
            var balanceSpan = document.getElementById("total-balance");
            balanceSpan.textContent = balanceValue;
            balanceSpan.setAttribute("data-value", balanceValue);

            // 同样更新 staked_balance span，如果有相关的 span 可以添加如下代码
            var stakedBalanceSpan = document.getElementById("staked-balance"); // 假设你已经定义了这个 span
            if (stakedBalanceSpan) {
                stakedBalanceSpan.textContent = stakedBalanceValue;
                stakedBalanceSpan.setAttribute("data-value", stakedBalanceValue);
            }
        }
    </script>
@stop
