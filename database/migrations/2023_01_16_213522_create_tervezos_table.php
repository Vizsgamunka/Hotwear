<?php

use App\Models\Tervezo;
use Faker\Provider\Lorem;
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
        Schema::create('tervezos', function (Blueprint $table) {
            $table->id('t_azon');
            $table->string('nev', 40);
            $table->text('kep');
            $table->text('leiras');
            $table->timestamps();
        });

        Tervezo::create(['nev' => 'Alexandra Kovács', 'kep' => 'tervezoKepek/tervezoKep1.jpg', 'leiras' => 'Szenvedélyes tervező vagyok, aki szeretne ruháival nőket boldogabbá tenni. Célom, hogy olyan ruhákat tervezek, amelyek nemcsak stílusosak, de kényelmesek is, és kiemelik a nők szépségét.']);
        Tervezo::create(['nev' => 'Eszter Szabó', 'kep' => 'tervezoKepek/tervezoKep2.jpg', 'leiras' => 'A divat mindig is az életem része volt, és ez a szenvedélyem azóta sem hagyott alább. A tervezői munka számomra a kreativitás és az önkifejezés egy formája, amellyel a nőket szeretném inspirálni.']);
        Tervezo::create(['nev' => 'Dóra Horváth', 'kep' => 'tervezoKepek/tervezoKep3.jpg', 'leiras' => 'Célom, hogy olyan ruhákat tervezzek, amelyek stílusosak, mégis praktikusak és kényelmesek. Szeretem a minimalista megközelítést, de szeretnék néhány egyedi részletet belecsempészni a tervezéseimbe.']);
        Tervezo::create(['nev' => 'Viktória Nagy', 'kep' => 'tervezoKepek/tervezoKep4.jpg', 'leiras' => 'A nőiesség és a stílus mindig is fontos szerepet játszottak az életemben. Szeretem a letisztult, elegáns vonalvezetést, de szeretnék olyan ruhákat tervezni, amelyek az egyéniségünket is kiemelik.']);
        Tervezo::create(['nev' => 'Emília Balogh', 'kep' => 'tervezoKepek/tervezoKep5.jpg', 'leiras' => 'Az inspirációmat a természetből merítem, és szeretném ezt az érzést belecsempészni a tervezéseimbe. Célom, hogy olyan ruhákat tervezzek, amelyek stílusosak és egyediek, de mindig kényelmesek és könnyen viselhetőek.']);
        Tervezo::create(['nev' => 'Ádám Farkas', 'kep' => 'tervezoKepek/tervezoKep6.jpg', 'leiras' => 'Egy divattervező, aki szakmai tapasztalattal és kreativitással rendelkezik a divatiparban. A tervezői énem által teremtett ruhaköltemények minden egyes részletében a nőiesség és elegancia ötvöződik']);
        Tervezo::create(['nev' => 'Zoltán Szilágyi', 'kep' => 'tervezoKepek/tervezoKep7.jpg', 'leiras' => 'Divattervezőként szeretem az elegáns, stílusos darabokat tervezni, amelyek egyszerre klasszikusak és modernek. A ruhakölteményeimben az anyagok és a formák kreatív játékával játszom.']);
        Tervezo::create(['nev' => 'Réka Kiss', 'kep' => 'tervezoKepek/tervezoKep8.jpg', 'leiras' => 'A ruhatervezés számomra a kreativitás és a kihívás egy formája. Szeretném olyan ruhákkal inspirálni a nőket, amelyek nemcsak stílusosak és egyediek, de magabiztosságot és önbizalmat is adnak.']);
        Tervezo::create(['nev' => 'Kinga Molnár', 'kep' => 'tervezoKepek/tervezoKep9.jpg', 'leiras' => 'A tervezői munka számomra a kreativitás és az önkifejezés egy formája, és szeretném ezt az érzést átadni az embereknek. Célom, hogy olyan ruhákat tervezzek, amelyekkel minden nő magabiztosabban érezheti magát a bőrében.']);
        Tervezo::create(['nev' => 'Márta Tóth', 'kep' => 'tervezoKepek/tervezoKep10.jpg', 'leiras' => 'A stílus mindig is fontos volt az életemben, és ezt a szenvedélyemet szeretném a tervezéseimbe belecsempészni. Célom, hogy olyan ruhákat tervezzek, amelyek nemcsak divatosak és stílusosak, de kényelmesek és praktikusak is.']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tervezos');
    }
};
