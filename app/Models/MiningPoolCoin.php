<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningPoolCoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'mining_pool_id',
        'coin_id',
        'annual_yield',
        'min_stake_amount',
        'max_stake_amount',
    ];

    public function miningPool()
    {
        return $this->belongsTo(MiningPool::class);
    }
}
