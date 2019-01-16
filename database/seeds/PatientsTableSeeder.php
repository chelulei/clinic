<?php

use Illuminate\Database\Seeder;
use App\Patient;
class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++ ){

            $patient= new Patient;
            $patient->name=str_random(10);
            $patient->age=rand(10,60);
            $patient->sex='male';
            $patient-> status='single';
            $patient->address='200b';
            $patient->date_birth='08/27/1984';
            $patient->course='comb';
            $patient->year='2019';
            $patient->religion='muslim';
            $patient-> name2='cosmas kiprono';
            $patient-> contact=rand(1000,465895);
            $patient-> address2='40bb';
            $patient->save();
        }


  }
}