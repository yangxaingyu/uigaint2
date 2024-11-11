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
                    <form action="/" method="post">
                        <div class="withdrawal_coin_dropdown_sect">
                            <label>Select a coin</label>
                            <div class="withdrawal_coin_dropbox">
                                <span>
                                    <img :src="coinIcon" alt="flag" class="img-fluid">
                                </span>
                                <h4>@{{ coinName }}</h4>
                            </div>
                            <div class="withdrawal_coin_drop_list">
                                <ul>
                                    @foreach ($currencies as $currency)
                                        <li @click="changeCoin({{ json_encode($currency) }})">{{ $currency['name'] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="withdrawal_network_dropdown_sect">
                            <label>
                                Select network
                            </label>
                            <div class="withdrawal_network_dropbox">
                                <h4>@{{ netWorkName }}</h4>
                            </div>
                            <div class="withdrawal_network_drop_list">
                                <ul>
                                    <li v-for="item in netWorkData" :key="item.id"
                                        @click="changeNetWork(item)">
                                        @{{ item.name }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="input__group mb-23">
                            <label for="address" style="text-transform: unset;">Withdrawal address</label>
                            <input type="text" name="email" id="address" placeholder="Withdrawal address">
                        </div>

                        <div class="item-button">
                            <a href="index.html" class="theme-btn blue">
                                <span>submit</span>
                                <div class="hover-shape1"></div>
                                <div class="hover-shape2"></div>
                                <div class="hover-shape3"></div>
                            </a>
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
                                        <img src="/storage/images/icons/meta-mask.png" alt="Meta-mask-Image">
                                    </span>
                                    MetaMask
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="/storage/images/icons/coinbase.png" alt="Coinbase-Image">
                                    </span>
                                    Coinbase
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="/storage/images/icons/trust.png" alt="Trust-Image">
                                    </span>
                                    Trust Wallet
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="/storage/images/icons/wallet.png" alt="Wallet-Image">
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
    <script src="{{\App\Server\Helper::assets('/js/axios.min.js')}}"></script>
    <script src="{{\App\Server\Helper::assets('/js/vue.min.js')}}"></script>
    <script>
        var coinData = <?php echo json_encode($currencies); ?>;
        const url = "http://bit.shop.com/getnetwork"
        const path = '/storage/images/currency/'
        const app = new Vue({
            el: '#app',
            data: {
                network: '',
                coinName: '',
                coinIcon: '',
                coinData: '',
                netWorkId: '',
                netWorkName: '',
                netWorkData: [],
            },
            mounted() {
                this.coinData = coinData
                this.coinName = this.coinData[0].name
                this.coinIcon = path + this.coinData[0].icon
                this.getNetNetWork(this.coinIcon)
            },
            methods: {
                changeCoin(data) {
                    this.coinName = data.name
                    this.coinIcon = path + data.icon
                    this.netWorkName = data.name
                    $(".withdrawal_coin_drop_list").toggle();
                    this.getNetNetWork(data.id)
                },
                changeNetWork(data) {
                    this.netWorkId = data.id
                    this.netWorkName = data.name
                    $(".withdrawal_network_drop_list").toggle();
                },
                async getNetNetWork(coinId) {
                    getNetWorkUrl = url + "?id=" + coinId +"?t=" + (new Date()).getTime()
                    let result = await axios.get(getNetWorkUrl);
                    this.netWorkData = result.data
                    this.netWorkId = this.netWorkData[0].id
                    this.netWorkName = this.netWorkData[0].name
                    $(".withdrawal_network_drop_list").hide();
                }
            }
        })
    </script>
@stop