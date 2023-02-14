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
            $table->foreignId('kategoria')->references('kategoria_id')->on('kategorias');
            $table->integer('ar');
            $table->timestamps();
        });
        Modell::create(['nev' => 'DERES', 'tervezo' => '1', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/barnaPulcsi.jpg', 'szezon' => 'NYA', 'kategoria' => '1', 'ar' => 10000]);
        Modell::create(['nev' => 'SZEGÉNY', 'tervezo' => '2', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/feketePulcsi.jpg', 'szezon' => 'TEL', 'kategoria' => '2', 'ar' => 23000]);
        Modell::create(['nev' => 'NEMES', 'tervezo' => '3', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/feherPulcsi.jpg', 'szezon' => 'OSZ', 'kategoria' => '3', 'ar' => 12000]);
        Modell::create(['nev' => 'ESSENCE', 'tervezo' => '4', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/kekPulcsi.jpg', 'szezon' => 'TAV', 'kategoria' => '4', 'ar' => 25000]);
        Modell::create(['nev' => 'URA TOP', 'tervezo' => '5', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/lilaPulcsi.jpg', 'szezon' => 'NYA', 'kategoria' => '5', 'ar' => 18000]);
        Modell::create(['nev' => 'BORD', 'tervezo' => '6', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/narancssargaPulcsi.jpg', 'szezon' => 'TEL', 'kategoria' => '6', 'ar' => 22000]);
        Modell::create(['nev' => 'FAKO', 'tervezo' => '7', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/pirosPulcsi.jpg', 'szezon' => 'OSZ', 'kategoria' => '7', 'ar' => 15000]);
        Modell::create(['nev' => 'ZAJK', 'tervezo' => '8', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/rozsaszinPulcsi.jpg', 'szezon' => 'TAV', 'kategoria' => '8', 'ar' => 23000]);
        Modell::create(['nev' => 'ZIRIND', 'tervezo' => '9', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/sargaPulcsi.jpg', 'szezon' => 'NYA', 'kategoria' => '9', 'ar' => 24000]);
        Modell::create(['nev' => 'ISLÓG', 'tervezo' => '10', 'leiras' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'kep' => 'termekFoKepek/zoldPulcsi.jpg', 'szezon' => 'TEL', 'kategoria' => '10', 'ar' => 26000]);
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
