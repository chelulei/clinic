<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('slug')->nullable();
            $table->text('treat');
            $table->text('notes');
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
        Schema::dropIfExists('dentals');
    }
}
