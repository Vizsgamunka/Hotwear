<?php

use App\Models\Tervezo;
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
            $table->timestamps();
        });

        Tervezo::create(['nev' => 'Calvin Klein']);
        Tervezo::create(['nev' => 'Gucci']);
        Tervezo::create(['nev' => 'Armani']);
        Tervezo::create(['nev' => 'Louis Vuitton']);
        Tervezo::create(['nev' => 'Prada']);
        Tervezo::create(['nev' => 'Versace']);
        Tervezo::create(['nev' => 'Dolce & Gabbana']);
        Tervezo::create(['nev' => 'Givenchy']);
        Tervezo::create(['nev' => 'Fendi']);
        Tervezo::create(['nev' => 'Valentino']);
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
