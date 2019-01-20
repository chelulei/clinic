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
            $table->text('address');
            $table->string('date_birth');
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('course');
            $table->string('year');
            $table->string('religion')->nullable();
            $table->string('name2');
            $table->string('contact');
            $table->text('address2');
            $table->string('history')->nullable();
            $table->text('others')->nullable();
            $table->text('allergies')->nullable();
            $table->string('illness')->nullable();
            $table->string('immune')->nullable();
            $table->text('others2')->nullable();
            $table->text('medics')->nullable();
            $table->string('hospital')->nullable();
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
