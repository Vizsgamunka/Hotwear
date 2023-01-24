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
        Kep::create(['eleresi_ut' => 'src/base/10.png', 'modell' => '1']);
        Kep::create(['eleresi_ut' => 'src/base/11.png', 'modell' => '1']);
        Kep::create(['eleresi_ut' => 'src/base/12.png', 'modell' => '2']);
        Kep::create(['eleresi_ut' => 'src/base/13.png', 'modell' => '2']);
        Kep::create(['eleresi_ut' => 'src/base/14.png', 'modell' => '3']);
        Kep::create(['eleresi_ut' => 'src/base/15.png', 'modell' => '3']);
        Kep::create(['eleresi_ut' => 'src/base/16.png', 'modell' => '4']);
        Kep::create(['eleresi_ut' => 'src/base/17.png', 'modell' => '4']);
        Kep::create(['eleresi_ut' => 'src/base/18.png', 'modell' => '5']);
        Kep::create(['eleresi_ut' => 'src/base/19.png', 'modell' => '5']);
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
