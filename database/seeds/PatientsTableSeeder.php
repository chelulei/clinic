<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
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
        DB::table('patients')->truncate();

        //generate 3 users
        DB::table('patients')->insert([
                [
                    'name'=>'josken prono',
                    'email'=>'bomo@gmail.com',
                    'image'=>'default.png',
                ],
                [
                    'name'=>'josk sikilai',
                    'email'=>'bomor@gmail.com',
                    'image'=>'default.png',
                ],
                [
                    'name'=>'joken ptum',
                    'email'=>'bomori@gmail.com',
                    'image'=>'default.png',
                ],
                [
                    'name'=>'joen rono',
                    'email'=>'omo@gmail.com',
                    'image'=>'default.png',
                ],
                [
                    'name'=>'jsk sikilai',
                    'email'=>'bmor@gmail.com',
                    'image'=>'default.png',
                ],
                [
                    'name'=>'oken ptum',
                    'email'=>'bomoi@gmail.com',
                    'image'=>'default.png',
                ]

            ]

        );
    }

}
