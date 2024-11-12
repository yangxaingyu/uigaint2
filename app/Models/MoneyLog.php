<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyLog extends Model
{
    use HasFactory;

    protected $fillable = ['source_id', 'type', 'user_id', 'coin_id', 'amount', 'balance_after'];
}
