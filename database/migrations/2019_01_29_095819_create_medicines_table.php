<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id')->unsigned();
            $table->unsignedInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('restrict');
            $table->unsignedInteger('med_id')->unsigned();
            $table->string('quantity');
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
        Schema::dropIfExists('medicines');
    }
}
