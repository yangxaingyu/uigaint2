<?php

namespace App\Services;

use App\Enums\MoneyLogType;
use App\Models\Coin;
use Illuminate\Support\Facades\DB;

class CoinService
{
    protected $walletService;
    protected $exchangeRateService;

    public function __construct()
    {
        $this->walletService = new WalletService();
        $this->exchangeRateService = new ExchangeRateService();
    }

    /**
     * 用户币币转换
     */
    public function convert($userId, $fromCoin, $toCoin, $fromAmount)
    {
        if (is_numeric($fromCoin)) {
            $fromCoin = Coin::find($fromCoin);
        }

        if (is_numeric($toCoin)) {
            $toCoin = Coin::find($toCoin);
        }

        $toAmount = $this->exchangeRateService->convert($fromCoin, $toCoin, $fromAmount);

        $fromCoinId = $fromCoin->id;
        $toCoinId = $toCoin->id;
        DB::transaction(function () use ($userId, $fromCoinId, $fromAmount, $toCoinId, $toAmount) {
            $this->walletService->updateBalance($userId, $fromCoinId, -$fromAmount, MoneyLogType::CONVERSION);
            $this->walletService->updateBalance($userId, $toCoinId, $toAmount, MoneyLogType::CONVERSION);
        });
    }
}
