<?php

use App\Models\Modell;
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
            $table->text('leiras');
            $table->string('kep');
            $table->char('szezon', 3);
            $table->integer('max_mennyiseg');
            $table->foreignId('kategoria')->references('kategoria_id')->on('kategorias');
            $table->timestamps();
        });
        Modell::create(['nev' => 'DERES', 'tervezo' => '1', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/1.png', 'szezon' => 'NYA', 'max_mennyiseg' => 3, 'kategoria'     => '1']);
        Modell::create(['nev' => 'SZEGÉNY', 'tervezo' => '2', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/2.png', 'szezon' => 'TEL', 'max_mennyiseg' => 5, 'kategoria'   => '2']);
        Modell::create(['nev' => 'NEMES', 'tervezo' => '3', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/3.png', 'szezon' => 'OSZ', 'max_mennyiseg'  => 7, 'kategoria'    => '3']);
        Modell::create(['nev' => 'ESSENCE', 'tervezo' => '4', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/4.png', 'szezon' => 'TAV', 'max_mennyiseg' => 10, 'kategoria'  => '4']);
        Modell::create(['nev' => 'URA TOP', 'tervezo' => '1', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/5.png', 'szezon' => 'NYA', 'max_mennyiseg' => 5, 'kategoria'   => '5']);
        Modell::create(['nev' => 'BORD', 'tervezo' => '1', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/6.png', 'szezon' => 'TEL', 'max_mennyiseg'    => 3, 'kategoria'   => '6']);
        Modell::create(['nev' => 'FAKO', 'tervezo' => '2', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/7.png', 'szezon' => 'OSZ', 'max_mennyiseg'    => 4, 'kategoria'   => '7']);
        Modell::create(['nev' => 'ZAJK', 'tervezo' => '3', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/8.png', 'szezon' => 'TAV', 'max_mennyiseg'    => 6, 'kategoria'   => '8']);
        Modell::create(['nev' => 'ZIRIND', 'tervezo' => '4', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/9.png', 'szezon' => 'NYA', 'max_mennyiseg'  => 2, 'kategoria'   => '9']);
        Modell::create(['nev' => 'ISLÓG', 'tervezo' => '1', 'leiras' => 'Lorem ipsum', 'kep' => 'src/base/10.png', 'szezon' => 'TEL', 'max_mennyiseg'  => 10, 'kategoria'  => '10']);
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
