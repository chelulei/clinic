<?php

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
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
        DB::table('histories')->truncate();

        //generate 3 users
        DB::table('histories')->insert([
                [
                    'name'=>'HPN'
                    
                ],
                [
                    'name'=>'Diabetes'
                   
                ],
                [
                    'name'=>'Asthma'
                   
                ],
                [
                    'name'=>'Allergies'
                    
                ],
                [
                    'name'=>'Cardiac problems'
                    
                ],
                [
                    'name'=>'Arthritis'
                    
                ]

            ]

        );
    }
}
