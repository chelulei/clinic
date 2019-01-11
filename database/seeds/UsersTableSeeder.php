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
                'slug'=>'prono',
                'email'=>'bomo@gmail.com',
                'password'=>bcrypt('secret'),
                'image'=>'default.png',
            ],


            ]

        );
    }
}
