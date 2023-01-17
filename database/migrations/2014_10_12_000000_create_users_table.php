<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('f_azon');
            $table->string('vezeteknev', 30);
            $table->string('keresztnev', 30);
            $table->string('email')->unique();
            $table->string('jelszo');
            $table->string('telefonszam');
            $table->string('varos');
            $table->string('cim');
            $table->boolean('hirlevel');
            $table->integer('jogosultsag'); 
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['vezeteknev'=>'Polgár', 'keresztnev'=>'Attila','email'=>'polgar.attila@gmail.com', 'jelszo'=> Hash::make('Aa123456@'), 'telefonszam'=> '06701234567', 'varos'=>'Pécel', 'cim'=>'Petőfi Sándor utca 13', 'hirlevel'=>false, 'jogosultsag'=>3]);

        User::create(['vezeteknev'=>'Somoskői', 'keresztnev'=>'Gábor','email'=>'smskgbr@gmail.com', 'jelszo'=> Hash::make('Aa123456@'), 'telefonszam'=> '06701234561', 'varos'=>'Budapest', 'cim'=>'Kolompér utca 13', 'hirlevel'=>true, 'jogosultsag'=>1]);

        User::create(['vezeteknev'=>'Kovács', 'keresztnev'=>'Dániel','email'=>'kovacs.daniel@gmail.com', 'jelszo'=> Hash::make('Aa123456@'), 'telefonszam'=> '06701234562', 'varos'=>'Budapest', 'cim'=>'Kolompér utca 14', 'hirlevel'=>true, 'jogosultsag'=>2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
