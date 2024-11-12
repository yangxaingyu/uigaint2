<?php

/**
 * 汇率
 */

namespace App\Services;

class ExchangeRateService
{

    public function convert($fromCoin, $toCoin, $amount)
    {
        $rate = $this->getExchangeRate($fromCoin, $toCoin);

        return $amount * $rate;
    }

    /**
     * @todo 后续通过api获取汇率
     */
    public function getExchangeRate($fromCoin, $toCoin)
    {
        return 1;
    }
}