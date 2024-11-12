<?php

namespace App\Enums;

class StakeStatus
{
    const ACTIVE = 'active';
    const COMPLETED = 'completed';
    const CANCELED = 'canceled';

    public static function display()
    {
        return array(
            'active' => 'active',
            'completed' => 'completed',
            'canceled' => 'canceled',
        );
    }
}
