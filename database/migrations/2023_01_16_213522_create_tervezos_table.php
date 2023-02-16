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

        Tervezo::create(['nev' => 'Calvin Klein', 'kep' => 'tervezoKepek/tervezoKep1.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Gucci', 'kep' => 'tervezoKepek/tervezoKep2.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Armani', 'kep' => 'tervezoKepek/tervezoKep3.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Louis Vuitton', 'kep' => 'tervezoKepek/tervezoKep4.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Prada', 'kep' => 'tervezoKepek/tervezoKep5.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Versace', 'kep' => 'tervezoKepek/tervezoKep6.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Dolce & Gabbana', 'kep' => 'tervezoKepek/tervezoKep7.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Givenchy', 'kep' => 'tervezoKepek/tervezoKep8.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Fendi', 'kep' => 'tervezoKepek/tervezoKep9.jpg', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Valentino', 'kep' => 'tervezoKepek/tervezoKep10.jpg', 'leiras' => 'Lorem ipsum']);
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
