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
            $table->integer('ar');
            $table->timestamps();
        });
        Termek::create(['modell' => '1', 'meret' => 'xs', 'ar' => 10000]);
        Termek::create(['modell' => '2', 'meret' => 's', 'ar' => 23000]);
        Termek::create(['modell' => '1', 'meret' => 's', 'ar' => 12000]);
        Termek::create(['modell' => '2', 'meret' => 'm', 'ar' => 25000]);
        Termek::create(['modell' => '3', 'meret' => 'l', 'ar' => 18000]);
        Termek::create(['modell' => '4', 'meret' => 'xl', 'ar' => 22000]);
        Termek::create(['modell' => '5', 'meret' => 'xs', 'ar' => 15000]);
        Termek::create(['modell' => '5', 'meret' => 'm', 'ar' => 23000]);
        Termek::create(['modell' => '5', 'meret' => 'l', 'ar' => 24000]);
        Termek::create(['modell' => '5', 'meret' => 'xll', 'ar' => 26000]);
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
