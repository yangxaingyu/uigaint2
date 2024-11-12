<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stake_id',
        'coin_id',
        'amount',
        'rate',
        'reward_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stake()
    {
        return $this->belongsTo(Stake::class);
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }
}
