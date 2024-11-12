<?php

/**
 * 提现
 */

namespace App\Services;

use App\Enums\MoneyLogType;

class WithdrawalService
{
    public function withdraw($userId, $coinId, $amount, $sourceId)
    {
        $walletService = new WalletService();
        $walletService->updateBalance($userId, $coinId, -$amount, MoneyLogType::WITHDRAWAL, $sourceId);
    }
}