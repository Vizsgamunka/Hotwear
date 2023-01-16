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
        Schema::create('termeks', function (Blueprint $table) {
            $table->id('termek_id');
            $table->foreignId('modell')->references('modell_id')->on('modells');
            $table->char('meret', 3);
            $table->integer('ar');
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
        Schema::dropIfExists('termeks');
    }
};
