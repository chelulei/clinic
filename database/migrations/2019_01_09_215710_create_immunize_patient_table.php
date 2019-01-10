<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmunizePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immunize_patient', function (Blueprint $table) {
            $table->integer('patient_id')->unsigned();
            $table->integer('immunize_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')
                ->onDelete('cascade');
            $table->foreign('immunize_id')->references('id')->on('immunizations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immunize_patient');
    }
}
