<?php

use App\Models\Termek;
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
            $table->integer('keszlet');
            $table->timestamps();
        });
        Termek::create(['modell' => '1', 'meret' => 'xs', 'keszlet' => 1]);
        Termek::create(['modell' => '2', 'meret' => 's', 'keszlet' => 2]);
        Termek::create(['modell' => '3', 'meret' => 's', 'keszlet' => 3]);
        Termek::create(['modell' => '4', 'meret' => 'm', 'keszlet' => 4]);
        Termek::create(['modell' => '5', 'meret' => 'l', 'keszlet' => 5]);
        Termek::create(['modell' => '6', 'meret' => 'xl', 'keszlet' => 6]);
        Termek::create(['modell' => '7', 'meret' => 'xs', 'keszlet' => 7]);
        Termek::create(['modell' => '8', 'meret' => 'm', 'keszlet' => 8]);
        Termek::create(['modell' => '9', 'meret' => 'l', 'keszlet' => 9]);
        Termek::create(['modell' => '10', 'meret' => 'xxl', 'keszlet' => 3]);
        Termek::create(['modell' => '1', 'meret' => 'm', 'keszlet' => 4]);
        Termek::create(['modell' => '1', 'meret' => 'l', 'keszlet' => 9]);
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
