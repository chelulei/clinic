<?php

use Illuminate\Database\Seeder;

class ImmunizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //reset the users table
        DB::table('immunizations')->truncate();

        //generate 3 users
        DB::table('immunizations')->insert([
                [
                    'name'=>'BCG'
                   
                ],
                [
                    'name'=>'DPT'
                    
                ],
                [
                    'name'=>'opv'
                    
                ],
                [
                    'name'=>'Hep. B'
                   
                ],
                [
                    'name'=>'Measles'
                   
                ],
                [
                    'name'=>'TT'
                    
                ]

            ]

        );
    }
}
