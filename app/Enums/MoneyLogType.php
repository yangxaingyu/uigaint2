<?php

namespace App\Enums;

class MoneyLogType
{
    const DEPOSIT = 'deposit';
    const WITHDRAWAL = 'withdrawal';
    const STAKE = 'stake';
    const UNSTAKE = 'unstake';
    const REWARD = 'reward';
    const CONVERSION = 'conversion';
}