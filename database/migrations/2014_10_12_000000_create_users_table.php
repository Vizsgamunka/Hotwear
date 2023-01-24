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
            $table->string('nev', 50);
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

        User::create(['nev' => 'Polgár Attila', 'email' => 'polgar.attila@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234567', 'varos' => 'Pécel', 'cim' => 'Petőfi Sándor utca 13', 'hirlevel' => false, 'jogosultsag' => 3]);
        User::create(['nev' => 'Somoskői Gábor', 'email' => 'smskgbr@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234561', 'varos' => 'Budapest', 'cim' => 'Kolompér utca 13', 'hirlevel' => true, 'jogosultsag' => 1]);
        User::create(['nev' => 'Kovács Dániel', 'email' => 'kovacs.daniel@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234562', 'varos' => 'Budapest', 'cim' => 'Kolompér utca 14', 'hirlevel' => true, 'jogosultsag' => 2]);
        User::create(['nev' => 'Kiss András', 'email' => 'kiss.andras@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234568', 'varos' => 'Debrecen', 'cim' => 'Erzsébet utca 13', 'hirlevel' => false, 'jogosultsag' => 3]);
        User::create(['nev' => 'Nagy Zsófia', 'email' => 'nagy.zsofia@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234569', 'varos' => 'Szeged', 'cim' => 'Kossuth Lajos utca 13', 'hirlevel' => true, 'jogosultsag' => 1]);
        User::create(['nev' => 'Molnár Tamás', 'email' => 'molnar.tamas@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234570', 'varos' => 'Budapest', 'cim' => 'Fő utca 13', 'hirlevel' => false, 'jogosultsag' => 2]);
        User::create(['nev' => 'Tóth Mária', 'email' => 'toth.maria@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234571', 'varos' => 'Miskolc', 'cim' => 'Ady Endre utca 13', 'hirlevel' => true, 'jogosultsag' => 3]);
        User::create(['nev' => 'Balogh László', 'email' => 'balogh.laszlo@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234572', 'varos' => 'Székesfehérvár', 'cim' => 'Széchenyi utca 13', 'hirlevel' => false, 'jogosultsag' => 1]);
        User::create(['nev' => 'Fekete Péter', 'email' => 'fekete.peter@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234573', 'varos' => 'Budapest', 'cim' => 'Bajcsy-Zsilinszky utca 13', 'hirlevel' => true, 'jogosultsag' => 2]);
        User::create(['nev' => 'Szabó Gábor', 'email' => 'szabo.gabor@gmail.com', 'jelszo' => Hash::make('Aa123456@'), 'telefonszam' => '06701234574', 'varos' => 'Eger', 'cim' => 'Eszterházy utca 13', 'hirlevel' => false, 'jogosultsag' => 3]);
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
