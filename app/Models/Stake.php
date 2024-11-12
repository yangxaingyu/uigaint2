<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stake extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mining_pool_id',
        'coin_id',
        'amount',
        'reward_amount',
        'reward_rate',
        'start_date',
        'end_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function miningPool()
    {
        return $this->belongsTo(MiningPool::class);
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }
}
