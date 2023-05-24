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
        Schema::create('projects', function (Blueprint $table) {
            //schema for projects table
            $table->id();
            $table->timestamps();
            $table->string('naziv_projekta');
            $table->text('opis_projekta');
            $table->integer('cijena_projekta');
            $table->text('obavljeni_poslovi');
            $table->date('datum_pocetka');
            $table->date('datum_zavrsetka');
            $table->string('voditelj_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
