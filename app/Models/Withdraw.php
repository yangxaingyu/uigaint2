<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'coin_id', 'network_id', 'address', 'amount', 'remarks'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }
}
