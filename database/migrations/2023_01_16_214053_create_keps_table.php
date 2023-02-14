<?php

use App\Models\Kep;
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
        Schema::create('keps', function (Blueprint $table) {
            $table->id('kep_id');
            $table->string('eleresi_ut');
            $table->foreignId('modell')->references('modell_id')->on('modells');
            $table->timestamps();
        });
        Kep::create(['eleresi_ut' => 'termekFoKepek/barnaPulcsi.jpg', 'modell' => '1']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/feketePulcsi.jpg', 'modell' => '2']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/feherPulcsi.jpg', 'modell' => '3']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/kekPulcsi.jpg', 'modell'=> '4']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/lilaPulcsi.jpg', 'modell' => '5']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/narancssargaPulcsi.jpg', 'modell' => '6']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/pirosPulcsi.jpg', 'modell' => '7']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/rozsaszinPulcsi.jpg', 'modell' => '8']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/sargaPulcsi.jpg', 'modell' => '9']);
        Kep::create(['eleresi_ut' => 'termekFoKepek/zoldPulcsi.jpg', 'modell' => '10']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keps');
    }
};
