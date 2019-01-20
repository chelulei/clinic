<?php

use Illuminate\Database\Seeder;
use App\Appointment;
class AppointmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Appointment::class, 5)->create();
    }
}
