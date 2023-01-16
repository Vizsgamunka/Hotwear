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
        Schema::create('modells', function (Blueprint $table) {
            $table->id('modell_id');
            $table->string('nev', 30);
            $table->foreignId('tervezo')->references('t_azon')->on('tervezos');
            $table->string('kep');
            $table->char('szezon', 3);
            $table->integer('max_mennyiseg');
            $table->foreignId('kategoria')->references('kategoria_id')->on('kategorias');
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
        Schema::dropIfExists('modells');
    }
};
