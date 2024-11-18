<?php

namespace App\Services;

use App\Models\Wallet;
use App\Models\MoneyLog;
use App\Enums\MoneyLogType;
use Illuminate\Support\Facades\DB;

class WalletService
{
    public function updateBalance($userId, $coinId, $amount, $logType, $sourceId = null)
    {
        DB::transaction(function () use ($userId, $coinId, $amount, $logType, $sourceId) {
            $wallet = Wallet::getUserWallet($userId, $coinId);

            if ($amount < 0 && $wallet->balance < abs($amount)) {
                throw new \Exception('Insufficient balance');
            }

            switch ($logType) {
                case MoneyLogType::STAKE:
                    $wallet->balance -= abs($amount);
                    $wallet->staked_balance += abs($amount);
                    break;

                case MoneyLogType::UNSTAKE:
                    $wallet->balance += abs($amount);
                    $wallet->staked_balance -= abs($amount);
                    break;
                default:
                    $wallet->balance += $amount;
                    break;
            }

            $wallet->save();

            $this->createLog($userId, $coinId, $amount, $wallet->balance, $logType, $sourceId);
        });
    }

    protected function createLog($userId, $coinId, $amount, $balanceAfter, $type, $sourceId = null)
    {
        MoneyLog::create([
            'source_id' => $sourceId,
            'type' => $type,
            'user_id' => $userId,
            'coin_id' => $coinId,
            'amount' => $amount,
            'balance_after' => $balanceAfter,
        ]);
    }
}
