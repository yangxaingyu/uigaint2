<?php

/**
 * 充值
 */

namespace App\Services;

use App\Enums\MoneyLogType;

class DepositService
{
    public function deposit($userId, $coinId, $amount, $sourceId)
    {
        $walletService = new WalletService();
        $walletService->updateBalance($userId, $coinId, $amount, MoneyLogType::DEPOSIT, $sourceId);
    }
}