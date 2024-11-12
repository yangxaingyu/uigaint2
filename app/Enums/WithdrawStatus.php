<?php

namespace App\Enums;

class WithdrawStatus
{
    const PENDING = 0;
    const SUCCEEDED = 1;
    const FAILED = 2;

    public static function display()
    {
        return array(
            '0' => 'Pending',
            '1' => 'Succeeded',
            '2' => 'Failed',
        );
    }

    public static function labels()
    {
        return array(
            '0' => 'info',
            '1' => 'success',
            '2' => 'danger',
        );
    }
}
