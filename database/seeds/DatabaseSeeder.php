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
       $this->call(UsersTableSeeder::class);
       $this->call(HistoryTableSeeder::class);
       $this->call(ImmunizationTableSeeder::class);
       $this->call(AddDummyEvent::class);
    }
}
