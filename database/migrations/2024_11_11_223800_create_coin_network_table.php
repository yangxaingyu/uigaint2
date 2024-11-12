<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_network', function (Blueprint $table) {
            $table->foreignId('coin_id')->constrained()->onDelete('cascade');
            $table->foreignId('network_id')->constrained()->onDelete('cascade');
            $table->primary(['coin_id', 'network_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coin_network');
    }
}
