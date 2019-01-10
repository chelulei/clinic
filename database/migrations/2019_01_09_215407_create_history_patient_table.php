<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_patient', function (Blueprint $table) {
            $table->integer('patient_id')->unsigned();
            $table->integer('history_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')
                ->onDelete('cascade');
            $table->foreign('history_id')->references('id')->on('histories')
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
        Schema::dropIfExists('history_patient');
    }
}
