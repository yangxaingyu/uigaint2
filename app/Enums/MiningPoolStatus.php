<?php

namespace App\Enums;

class MiningPoolStatus
{
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';

    public static function display()
    {
        return array(
            'active' => 'ACTIVE',
            'inactive' => 'INACTIVE',
        );
    }

    public static function labels()
    {
        return array(
            'active' => 'success',
            'inactive' => 'danger',
        );
    }
}
