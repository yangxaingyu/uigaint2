<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function network()
    {
        return $this->belongsTo(Network::class);
    }
}
