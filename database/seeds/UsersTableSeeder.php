<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table
        DB::table('users')->truncate();

        //generate 3 users
        DB::table('users')->insert([
            [
                'name'=>'josken prono',
                'username'=>'mike',
                'role'=>'3',
                'slug'=>'prono',
                'email'=>'bomo@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ],
            [
                'name'=>'josk sikilai',
                'username'=>'mikey',
                'role'=>'0',
                'slug'=>'josken',
                'email'=>'bomor@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ],
            [
                'name'=>'joken ptum',
                'username'=>'prono',
                'role'=>'2',
                'slug'=>'bomori',
                'email'=>'bomori@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ],
            [
                'name'=>'joen rono',
                'username'=>'siki',
                'role'=>'2',
                'slug'=>'joen',
                'email'=>'omo@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ],
            [
                'name'=>'jsk sikilai',
                'username'=>'yes',
                'role'=>'2',
                'slug'=>'sikilai',
                'email'=>'bmor@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ],
            [
                'name'=>'oken ptum',
                'username'=>'wewe',
                'role'=>'1',
                'slug'=>'ptum',
                'email'=>'bomoi@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ]

            ]

        );
    }
}
