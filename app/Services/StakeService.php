<?php

/**
 * 质押
 */

namespace App\Services;

use App\Enums\MoneyLogType;
use App\Enums\StakeStatus;
use App\Models\MiningPool;
use App\Models\MiningPoolCoin;
use App\Models\Stake;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StakeService
{
    protected $walletService;

    public function __construct()
    {
        $this->walletService = new WalletService();
    }

    public function createStake($userId, $miningPoolId, $coinId, $amount)
    {
        $miningPoolCoin = MiningPoolCoin::where('mining_pool_id', $miningPoolId)
            ->where('coin_id', $coinId)
            ->firstOrFail();

        if ($amount < $miningPoolCoin->min_stake_amount) {
            throw new \Exception("Amount is below the minimum for staking. Please enter a higher amount.");
        }

        if ($amount > $miningPoolCoin->max_stake_amount) {
            throw new \Exception("Amount exceeds the maximum for staking. Please enter a lower amount.");
        }


        DB::transaction(function () use ($userId, $miningPoolId, $coinId, $amount) {

            $startDate = Carbon::now()->startOfDay();
            $endDate = Carbon::now()->addDays(MiningPool::find($miningPoolId)->lock_period_days-1)->endOfDay();
            $stake = Stake::create([
                'user_id' => $userId,
                'mining_pool_id' => $miningPoolId,
                'coin_id' => $coinId,
                'amount' => $amount,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'status' => StakeStatus::ACTIVE,
            ]);


            $this->walletService->updateBalance($userId, $coinId, -$amount, MoneyLogType::STAKE, $stake->id);
        });
    }

    public function releaseStake($stake)
    {

        if ($stake->status == StakeStatus::COMPLETED) {
            return;
        }

        DB::transaction(function () use ($stake) {
            $stake->status = StakeStatus::COMPLETED;
            $stake->save();

            $userId = $stake->user_id;
            $coinId = $stake->coin_id;
            $amount = $stake->amount;
            $this->walletService->updateBalance($userId, $coinId, $amount, MoneyLogType::UNSTAKE, $stake->id);
        });
    }
}
