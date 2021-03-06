<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call([

            // UsersTableSeeder::class,
            // PatientsTableSeeder::class,
            // PrescriptionTableSeeder::class,
            // AppointmentTableSeeder::class,
            RolesTableSeeder::class,
            PermissionTableSeeder::class,
            SuperadminPermissionSeeder::class,
            HistoryTableSeeder::class,
            ImmunizationTableSeeder::class,
            TeethTableSeeder::class,
//        AddDummyEvent::class
        ]);
        // factory (App\Inventory::class, 10)->create();
    }
}
