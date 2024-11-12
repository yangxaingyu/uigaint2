<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('stake_id')->constrained()->onDelete('cascade');
            $table->foreignId('coin_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 18, 8)->default(0);
            $table->decimal('rate', 5, 2)->default(0);
            $table->timestamp('reward_date');
            $table->timestamps();
            $table->unique(['user_id', 'stake_id', 'reward_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rewards');
    }
}
