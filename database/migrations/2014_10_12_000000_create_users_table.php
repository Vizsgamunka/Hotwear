<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('f_azon');
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefonszam');
            $table->string('varos');
            $table->string('cim');
            $table->boolean('hirlevel')->default(0);
            //  0:felhasználó    1:admin    2:superadmin
            $table->tinyInteger('jogosultsag')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'Polgár Attila', 'email' => 'polgar.attila@gmail.com', 'password' => Hash::make('Aa12345@'), 'telefonszam' => '06701234567', 'varos' => 'Pécel', 'cim' => 'Petőfi Sándor utca 13', 'hirlevel' => false, 'jogosultsag' => 1]);
        User::create(['name' => 'Somoskői Gábor', 'email' => 'smskgbr@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234561', 'varos' => 'Budapest', 'cim' => 'Kolompér utca 13', 'hirlevel' => true, 'jogosultsag' => 2]);
        User::create(['name' => 'Kovács Dániel', 'email' => 'kovacs.daniel@gmail.com', 'password' => Hash::make('Aa1234567@'), 'telefonszam' => '06701234562', 'varos' => 'Budapest', 'cim' => 'Kolompér utca 14', 'hirlevel' => true, 'jogosultsag' => 1]);
        User::create(['name' => 'Kiss András', 'email' => 'kiss.andras@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234568', 'varos' => 'Debrecen', 'cim' => 'Erzsébet utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);
        User::create(['name' => 'Nagy Zsófia', 'email' => 'nagy.zsofia@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234569', 'varos' => 'Szeged', 'cim' => 'Kossuth Lajos utca 13', 'hirlevel' => true, 'jogosultsag' => 0]);
        User::create(['name' => 'Molnár Tamás', 'email' => 'molnar.tamas@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234570', 'varos' => 'Budapest', 'cim' => 'Fő utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);
        User::create(['name' => 'Tóth Mária', 'email' => 'toth.maria@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234571', 'varos' => 'Miskolc', 'cim' => 'Ady Endre utca 13', 'hirlevel' => true, 'jogosultsag' => 0]);
        User::create(['name' => 'Balogh László', 'email' => 'balogh.laszlo@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234572', 'varos' => 'Székesfehérvár', 'cim' => 'Széchenyi utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);
        User::create(['name' => 'Fekete Péter', 'email' => 'fekete.peter@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234573', 'varos' => 'Budapest', 'cim' => 'Bajcsy-Zsilinszky utca 13', 'hirlevel' => true, 'jogosultsag' => 0]);
        User::create(['name' => 'Szabó Gábor', 'email' => 'szabo.gabor@gmail.com', 'password' => Hash::make('Aa123456@'), 'telefonszam' => '06701234574', 'varos' => 'Eger', 'cim' => 'Eszterházy utca 13', 'hirlevel' => false, 'jogosultsag' => 0]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
