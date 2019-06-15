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
            $table->unsignedInteger('patient_id')->nullable();
            $table->integer('status')->default(0);
            $table->unsignedInteger('user_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('bp');
            $table->string('pr');
            $table->string('rr');
            $table->string('temp');
            $table->string('wt');
            $table->text('complaints');
            $table->text('hpi');
            $table->text('examination');
            $table->text('assessment');
            $table->text('treatment');
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
        Schema::dropIfExists('prescriptions');
    }
}
