<?php

use Illuminate\Database\Seeder;
use App\Prescription;
class PrescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Prescription::class, 4)->create();
    }
}
