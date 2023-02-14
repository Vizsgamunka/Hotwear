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
        Modell::create(['nev' => 'DERES', 'tervezo' => '1', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/barnaPulcsi.jpg', 'szezon' => 'NYA', 'max_mennyiseg' => 1, 'kategoria'     => '1']);
        Modell::create(['nev' => 'SZEGÉNY', 'tervezo' => '2', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/feketePulcsi.jpg', 'szezon' => 'TEL', 'max_mennyiseg' => 2, 'kategoria'   => '2']);
        Modell::create(['nev' => 'NEMES', 'tervezo' => '3', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/feherPulcsi.jpg', 'szezon' => 'OSZ', 'max_mennyiseg'  => 3, 'kategoria'    => '3']);
        Modell::create(['nev' => 'ESSENCE', 'tervezo' => '4', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/kekPulcsi.jpg', 'szezon' => 'TAV', 'max_mennyiseg' => 4, 'kategoria'  => '4']);
        Modell::create(['nev' => 'URA TOP', 'tervezo' => '5', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/lilaPulcsi.jpg', 'szezon' => 'NYA', 'max_mennyiseg' => 5, 'kategoria'   => '5']);
        Modell::create(['nev' => 'BORD', 'tervezo' => '6', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/narancssargaPulcsi.jpg', 'szezon' => 'TEL', 'max_mennyiseg'    => 6, 'kategoria'   => '6']);
        Modell::create(['nev' => 'FAKO', 'tervezo' => '7', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/pirosPulcsi.jpg', 'szezon' => 'OSZ', 'max_mennyiseg'    => 7, 'kategoria'   => '7']);
        Modell::create(['nev' => 'ZAJK', 'tervezo' => '8', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/rozsaszinPulcsi.jpg', 'szezon' => 'TAV', 'max_mennyiseg'    => 8, 'kategoria'   => '8']);
        Modell::create(['nev' => 'ZIRIND', 'tervezo' => '9', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/sargaPulcsi.jpg', 'szezon' => 'NYA', 'max_mennyiseg'  => 9, 'kategoria'   => '9']);
        Modell::create(['nev' => 'ISLÓG', 'tervezo' => '10', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/zoldPulcsi.jpg', 'szezon' => 'TEL', 'max_mennyiseg'  => 10, 'kategoria'  => '10']);
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
