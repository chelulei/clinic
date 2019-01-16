<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'name'=>$faker->name,
                'designation'=>$faker->word,
                'address'=>$faker->address,
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->email,

            ]);
        }
    }
}