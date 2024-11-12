<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningPoolCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mining_pool_coins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mining_pool_id')->constrained()->onDelete('cascade');
            $table->foreignId('coin_id');
            $table->decimal('annual_yield', 5, 2);
            $table->decimal('min_stake_amount', 16, 6);
            $table->decimal('max_stake_amount', 16, 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mining_pool_coins');
    }
}
