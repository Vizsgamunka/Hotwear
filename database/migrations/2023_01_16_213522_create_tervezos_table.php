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

        Tervezo::create(['nev' => 'Calvin Klein', 'kep' => 'src/base/1.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Gucci', 'kep' => 'src/base/2.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Armani', 'kep' => 'src/base/3.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Louis Vuitton', 'kep' => 'src/base/4.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Prada', 'kep' => 'src/base/4.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Versace', 'kep' => 'src/base/6.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Dolce & Gabbana', 'kep' => 'src/base/7.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Givenchy', 'kep' => 'src/base/8.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Fendi', 'kep' => 'src/base/8.png', 'leiras' => 'Lorem ipsum']);
        Tervezo::create(['nev' => 'Valentino', 'kep' => 'src/base/10.png', 'leiras' => 'Lorem ipsum']);
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
