<?php

/**
 * 收益计算
 */

namespace App\Services;

use App\Enums\MoneyLogType;
use App\Enums\StakeStatus;
use App\Models\Reward;
use App\Models\Stake;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RewardService
{
    protected $walletService;

    public function __construct()
    {
        $this->walletService = new WalletService();
    }

    public function createReward($stake, $rewardDate)
    {
        $checkDate = Carbon::parse($rewardDate);
        $startDate = Carbon::parse($stake->start_date);
        $endDate = Carbon::parse($stake->end_date);

        /**
         * @todo 检测单独出来
         */
        if ($checkDate->lt($startDate)) {
            return;
        }

        if ($checkDate->gt($endDate)) {
            $stakeService = new StakeService();
            $stakeService->releaseStake($stake);
            return;
        }

        $exists  = Reward::where('user_id', $stake->user_id)
            ->where('stake_id', $stake->id)
            ->where('reward_date', $rewardDate)
            ->exists();

        if ($exists) {
            return;
        }

        $miningPool = $stake->miningPool;
        $miningPoolCoin = $miningPool->supportedCoins()->where('coin_id', $stake->coin_id)->first();

        $stakeCoin = $stake->coin;
        $rewardCoin = $miningPool->rewardCoin;

        $annualYield = $miningPoolCoin->annual_yield;
        $dailyYieldInStakeCoin = ($stake->amount * $annualYield / 100) / 365;

        $exchangeRateService = new ExchangeRateService();
        $dailyYieldInRewardCoin = $exchangeRateService->convert($stakeCoin, $rewardCoin, $dailyYieldInStakeCoin);

        $rewardCoinId = $rewardCoin->id;

        DB::transaction(function () use ($stake, $rewardCoinId, $annualYield, $dailyYieldInRewardCoin, $rewardDate) {
            $reward = Reward::create([
                'user_id' => $stake->user_id,
                'stake_id' => $stake->id,
                'coin_id' => $rewardCoinId,
                'amount' => $dailyYieldInRewardCoin,
                'rate' => $annualYield,
                'reward_date' => $rewardDate,
            ]);

            $this->walletService->updateBalance($stake->user_id, $rewardCoinId, $dailyYieldInRewardCoin, MoneyLogType::REWARD, $reward->id);
        });
    }

    public function distributeRewards($rewardDate = '')
    {

        $activeStakes = Stake::where('status', StakeStatus::ACTIVE)->get();

        $rewardDate = $rewardDate ? $rewardDate : Carbon::now()->startOfDay();
        foreach ($activeStakes as $stake) {
            $this->createReward($stake, $rewardDate);
        }
    }
}