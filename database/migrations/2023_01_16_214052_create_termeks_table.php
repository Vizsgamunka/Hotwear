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
            $table->timestamps();
        });
        Termek::create(['modell' => '1', 'meret' => 'xs']);
        Termek::create(['modell' => '2', 'meret' => 's']);
        Termek::create(['modell' => '3', 'meret' => 's']);
        Termek::create(['modell' => '4', 'meret' => 'm']);
        Termek::create(['modell' => '5', 'meret' => 'l']);
        Termek::create(['modell' => '6', 'meret' => 'xl']);
        Termek::create(['modell' => '7', 'meret' => 'xs']);
        Termek::create(['modell' => '8', 'meret' => 'm']);
        Termek::create(['modell' => '9', 'meret' => 'l']);
        Termek::create(['modell' => '10', 'meret' => 'xxl']);
        Termek::create(['modell' => '1', 'meret' => 'm']);
        Termek::create(['modell' => '1', 'meret' => 'l']);
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
