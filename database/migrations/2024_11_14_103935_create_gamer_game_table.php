<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gamer_game', function (Blueprint $table) {
            $table->unsignedBigInteger('gamer_id');
            $table->unsignedBigInteger('game_id');
            $table->string('gamer_tag');
            $table->integer('hours_all_time');
            $table->integer('hours_last_week');
            $table->integer('achivements_percecnt');
            $table->integer('level');
            $table->foreign('gamer_id')->references('id')->on('gamers');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gamer_game');
    }
};
