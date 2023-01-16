<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id('f_azon');
            $table->string('vezeteknev', 30);
            $table->string('keresztnev', 30);
            $table->string('email')->unique();
            $table->string('jelszo');
            $table->integer('telefonszam');
            $table->string('varos');
            $table->string('cim');
            $table->boolean('hirlevel');
            $table->integer('jogosultsag'); 
            $table->rememberToken();
            $table->timestamps();
        });
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
