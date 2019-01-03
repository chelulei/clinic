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
                    'username'=>'mike',
                    'slug'=>'prono',
                    'email'=>'bomo@gmail.com',
                    'password'=>bcrypt('secret'),
                    'image'=>'default.png',
                ],
                [
                    'name'=>'josk sikilai',
                    'username'=>'mikey',
                    'slug'=>'josken',
                    'email'=>'bomor@gmail.com',
                    'password'=>bcrypt('secret'),
                    'image'=>'default.png',
                ],
                [
                    'name'=>'joken ptum',
                    'username'=>'prono',
                    'slug'=>'bomori',
                    'email'=>'bomori@gmail.com',
                    'password'=>bcrypt('secret'),
                    'image'=>'default.png',
                ],
                [
                    'name'=>'joen rono',
                    'username'=>'siki',
                    'slug'=>'joen',
                    'email'=>'omo@gmail.com',
                    'password'=>bcrypt('secret'),
                    'image'=>'default.png',
                ],
                [
                    'name'=>'jsk sikilai',
                    'username'=>'yes',
                    'slug'=>'sikilai',
                    'email'=>'bmor@gmail.com',
                    'password'=>bcrypt('secret'),
                    'image'=>'default.png',
                ],
                [
                    'name'=>'oken ptum',
                    'username'=>'wewe',
                    'slug'=>'ptum',
                    'email'=>'bomoi@gmail.com',
                    'password'=>bcrypt('secret'),
                    'image'=>'default.png',
                ]

            ]

        );
    }
}
