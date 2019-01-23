<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('patient_id')->unsigned()->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('restrict');
            $table->unsignedInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('bp')->nullable();
            $table->string('pr')->nullable();
            $table->string('rr')->nullable();
            $table->string('temp')->nullable();
            $table->string('wt')->nullable();
            $table->text('hpi')->nullable();
            $table->text('assessment')->nullable();
            $table->text('medication')->nullable();
            $table->text('prescriptions')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
}
