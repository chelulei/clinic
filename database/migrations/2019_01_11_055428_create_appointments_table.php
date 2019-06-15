<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('date');
            $table->string('time');
            $table->unsignedInteger('status')->default(0);
            $table->timestamps();

             $table->foreign('patient_id')->references('id')->on('patients')->onDelete('restrict');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
