@extends('main.main')

@section('withdrawal')
    <link rel="stylesheet" href="{{\App\Server\Helper::assets('/css/withdrawal.css')}}" />

    <div v-if="false" class="loader_first">
        <div class="circular-spinner"></div>
    </div>
    <!--Preloader area End here-->

    <!-- account section start -->
    <div id="app" class="account__area">
        <div class="account-bg"></div>
        <div class="container">
            <div class="account__content">
                <div class="account__form">
                    <div class="account__title mb-29">
                        <h2>withdrawal</h2>
                        <h3>Confirm that the receiving platform accepts the crypto and network you have selected. You may lose your assets if you choose an incompatible network.</h3>
                    </div>
                    <form method="post" action="/create-withdrawal">
                        <div class="withdrawal_coin_dropdown_sect">
                            <label>
                                <span class="red">*</span>
                                Select a coin
                            </label>
                            <div class="withdrawal_coin_dropbox">
                                <span>
                                    <img :src="coinIcon" alt="flag" class="img-fluid">
                                </span>
                                <h4>@{{ coinName }}</h4>
                            </div>
                            <div class="withdrawal_coin_drop_list">
                                <ul>
                                    @foreach ($coins as $coin)
                                        <li @click="changeCoin({{ json_encode($coin) }})">{{ $coin['name'] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="withdrawal_network_dropdown_sect">
                            <label>
                                <span class="red">*</span>
                                Select network
                            </label>
                            <div class="withdrawal_network_dropbox">
                                <h4>@{{ netWorkName }}</h4>
                            </div>
                            <div class="withdrawal_network_drop_list">
                                <ul>
                                    <li v-for="item in netWorkData" :key="item.networkId"
                                        @click="changeNetWork(item)">
                                        @{{ item.networkName }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="input__group mb-23">
                            <label for="quantity" style="text-transform: unset;">
                                <span class="red">*</span>
                                Withdrawal amount
                            </label>
                            <input type="text" id="quantity" ref="amount_input" v-model="amount" placeholder="Withdrawal amount" autocomplete="off">
                        </div>

                        <div class="input__group mb-23">
                            <label for="address" style="text-transform: unset;">
                                <span class="red">*</span>
                                Withdrawal address
                            </label>
                            <input type="text" id="address" ref="address_input" v-model="address" placeholder="Withdrawal address" autocomplete="off">
                        </div>

                        <div class="item-button">
                            <div @click="submitFn" class="theme-btn blue">
                                <span>submit</span>
                                <div class="hover-shape1"></div>
                                <div class="hover-shape2"></div>
                                <div class="hover-shape3"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="account-shadow"></div>
            </div>
        </div>
    </div>
    <!-- account section END -->

    <!-- Footer Section Start -->
    <Footer></Footer>
    <!-- Footer Section End -->

    <!-- Modal Section Start-->
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
                                        <img src="/storage/images/meta-mask.png" alt="Meta-mask-Image">
                                    </span>
                                    MetaMask
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="/storage/images/coinbase.png" alt="Coinbase-Image">
                                    </span>
                                    Coinbase
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="/storage/images/trust.png" alt="Trust-Image">
                                    </span>
                                    Trust Wallet
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="/storage/images/wallet.png" alt="Wallet-Image">
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
    <!-- Modal Section End-->

    <!-- Modal Section Start-->
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
                                            <img src="/storage/images/icons/meta-mask.png" alt="Meta-mask-Image">
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
    <script>
        var coinData = <?php echo json_encode($coins); ?>;
        const url = "/getnetwork/"
        const path = '/uploads/'
        const app = new Vue({
            el: '#app',
            data: {
                coinId: '',
                coinName: '',
                coinIcon: '',
                coinData: '',
                netWorkId: '',
                netWorkName: '',
                netWorkData: [],
                amount: '',
                address: '',
            },
            mounted() {
                this.coinData = coinData
                this.coinId = this.coinData[0].id
                this.coinName = this.coinData[0].name
                this.coinIcon = path + this.coinData[0].icon
                this.getNetNetWork()
            },
            methods: {
                submitFn() {
                    if (!app.amount) {
                        app.alertMsg(500, "Please fill the withdrawal amount field", function () {
                            app.$refs.amount_input.focus();
                        })
                        return
                    }
                    if (!app.address) {
                        app.alertMsg(500, "Please fill the withdrawal address field", function () {
                            app.$refs.address_input.focus();
                        })
                        return
                    }
                    layer.confirm('Confirm withdrawal?', {
                        title: 'Message',
                        skin: 'demo-class',
                        btn: ['Confirm', 'Cancel'],
                        btnAlign: 'c',
                        yes: function(index, layero) {
                            axios.post('/create-withdrawal', {
                                coin_id: app.coinId,
                                network_id: app.netWorkId,
                                amount: app.amount,
                                address: app.address,
                            }).then(function (response) {
                                var msg = response.data.msg
                                var code = response.data.code
                                app.alertMsg(code, msg)
                                if (code === 200) {
                                    app.amount = ''
                                    app.address = ''
                                }
                            }).catch(function (error) {
                                console.log(error);
                            });
                            layer.close(index)
                        },
                        cancel: function (index, layero) {
                            layer.close(index)
                        }
                    });
                },
                changeCoin(data) {
                    this.coinId = data.id
                    this.coinName = data.name
                    this.coinIcon = path + data.icon
                    $(".withdrawal_coin_drop_list").toggle();
                    this.getNetNetWork()
                },
                changeNetWork(data) {
                    this.netWorkId = data.networkId
                    this.netWorkName = data.networkName
                    $(".withdrawal_network_drop_list").toggle();
                },
                async getNetNetWork() {
                    getNetWorkUrl = url + "?coinId=" + this.coinId
                    let result = await axios.get(getNetWorkUrl);
                    console.log(result.data)
                    this.netWorkData = result.data
                    this.netWorkId = this.netWorkData[0].networkId
                    this.netWorkName = this.netWorkData[0].networkName
                    $(".withdrawal_network_drop_list").hide();
                },
                alertMsg(code, message) {
                    layer.open({
                        type: 1,
                        skin: 'demo-class',
                        area: ['40%', 'auto'],
                        title: 'Message',
                        shade: 0.6, // 遮罩透明度
                        shadeClose: true, // 点击遮罩区域，关闭弹层
                        anim: 1, // 0-6 的动画形式，-1 不开启
                        btn: ['Close'],
                        btnAlign: 'c',
                        content: '<div style="text-align: center;padding-top: 15px;">'+ message +'</div>',
                        yes: function (index, layero) {
                            layer.close(index)
                        },
                    });
                }
            }
        })
    </script>
@stop
