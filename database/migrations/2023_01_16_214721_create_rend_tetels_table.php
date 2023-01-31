<?php

use App\Models\Rend_tetel;
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
        /*Rend_tetel::create(['rendeles' => '1', 'termek' => '1', 'rend_menny' => 1]);
        Rend_tetel::create(['rendeles' => '2', 'termek' => '2', 'rend_menny' => 1]);
        Rend_tetel::create(['rendeles' => '3', 'termek' => '3', 'rend_menny' => 2]);*/
        /*Rend_tetel::create(['rendeles' => '4', 'termek' => '4', 'rend_menny' => 1]);
        Rend_tetel::create(['rendeles' => '5', 'termek' => '5', 'rend_menny' => 2]);
        Rend_tetel::create(['rendeles' => '6', 'termek' => '6', 'rend_menny' => 3]);
        Rend_tetel::create(['rendeles' => '7', 'termek' => '7', 'rend_menny' => 1]);
        Rend_tetel::create(['rendeles' => '8', 'termek' => '8', 'rend_menny' => 2]);
        Rend_tetel::create(['rendeles' => '9', 'termek' => '9', 'rend_menny' => 3]);
        Rend_tetel::create(['rendeles' => '10', 'termek' => '10', 'rend_menny' => 1]);*/
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
