<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rend_tetels', function (Blueprint $table) {
            $table->foreignId('rendeles')->references('rendeles_id')->on('rendeles');
            $table->foreignId('termek')->references('termek_id')->on('termeks');
            $table->integer('rend_menny');
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
        Schema::dropIfExists('rend_tetels');
    }
};
