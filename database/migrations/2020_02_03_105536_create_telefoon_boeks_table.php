<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefoonBoeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefoon_boeks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('telefoonnummer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefoon_boeks');
    }
}
