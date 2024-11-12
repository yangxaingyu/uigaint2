<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningPool extends Model
{
    use HasFactory;

    public function rewardCoin()
    {
        return $this->belongsTo(Coin::class, 'reward_coin_id');
    }

    public function supportedCoins()
    {
        return $this->hasMany(MiningPoolCoin::class);
    }
}
