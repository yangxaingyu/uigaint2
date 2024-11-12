<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'coin_id', 'balance', 'staked_balance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public static function getUserWallet($userId, $coinId)
    {
        return self::firstOrCreate(
            ['user_id' => $userId, 'coin_id' => $coinId],
            ['balance' => 0, 'staked_balance' => 0]
        );
    }
}
