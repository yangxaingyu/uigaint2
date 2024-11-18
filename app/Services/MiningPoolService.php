<?php

namespace App\Services;

use App\Models\Coin;
use App\Models\MiningPool;
use App\Models\Wallet;

class MiningPoolService
{
    public function getMiningPools($userId)
    {
        $miningPools = MiningPool::query()
            ->with('supportedCoins')
            ->with('rewardCoin')
            ->select('id', 'name', 'description', 'reward_coin_id', 'total_stake_limit', 'lock_period_days', 'end_date')
            ->where('status', 'active')
            ->orderBy('name', 'ASC')
            ->get();
        $miningPoolsArray = [];
        foreach ($miningPools as $k => $miningPool) {
            $miningPoolsArray[$k]['pool_id'] = $miningPool->id;
            $miningPoolsArray[$k]['pool_name'] = $miningPool->name;
            $miningPoolsArray[$k]['pool_description'] = $miningPool->description;
            $miningPoolsArray[$k]['reward_coin_id'] = $miningPool->rewardCoin->id;
            $miningPoolsArray[$k]['reward_coin_name'] = $miningPool->rewardCoin->name;
            $miningPoolsArray[$k]['reward_coin_icon'] = $miningPool->rewardCoin->icon;
            $miningPoolsArray[$k]['lock_period_days'] = $miningPool->lock_period_days;
            $miningPoolsArray[$k]['total_stake_limit'] = number_format($miningPool->total_stake_limit, 2);
            $miningPoolsArray[$k]['end_time'] = $miningPool->end_date;
            $miningPoolsArray[$k]['countdown_str'] = $miningPool->end_date;
            if ($miningPool->supportedCoins) {
                foreach ($miningPool->supportedCoins as $k2 => $supportedCoin) {
                    $temp_coin = Coin::find($supportedCoin->id);
                    $wallet = Wallet::getUserWallet($userId, $supportedCoin->id);
                    $miningPoolsArray[$k]['supported_coins'][$k2]['support_coin_id'] = $temp_coin->id;
                    $miningPoolsArray[$k]['supported_coins'][$k2]['support_coin_name'] = $temp_coin->name;
                    $miningPoolsArray[$k]['supported_coins'][$k2]['support_coin_icon'] = $temp_coin->icon;
                    $miningPoolsArray[$k]['supported_coins'][$k2]['annual_yield'] = $supportedCoin->annual_yield;
                    $miningPoolsArray[$k]['supported_coins'][$k2]['max_stake_amount'] = number_format($supportedCoin->min_stake_amount, 2);
                    $miningPoolsArray[$k]['supported_coins'][$k2]['min_stake_amount'] = number_format($supportedCoin->min_stake_amount, 2);
                    $miningPoolsArray[$k]['supported_coins'][$k2]['stake_amount'] = '';
                    $miningPoolsArray[$k]['supported_coins'][$k2]['balance'] = $wallet->balance;
                    $miningPoolsArray[$k]['supported_coins'][$k2]['is_flip'] = false;
                }
            } else {
                $miningPoolsArray[$k]['supported_coins'] = [];
            }
        }
        return $miningPoolsArray;
    }


}