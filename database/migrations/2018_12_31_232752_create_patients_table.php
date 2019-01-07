<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('status');
            $table->string('address');
            $table->string('date_birth');
            $table->string('course');
            $table->string('year');
            $table->string('religion');
            $table->string('weight');
            $table->string('height');
            $table->string('name2');
            $table->string('address2');
            $table->string('contact');
            $table->string('history');
            $table->string('immune');
            $table->string('illness');
            $table->string('history');
            $table->string('hospital');
            $table->string('allergies');
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
        Schema::dropIfExists('patients');
    }
}
