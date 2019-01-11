<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        //reset the users table
        DB::table('roles')->truncate();

        //generate 3 users
        DB::table('roles')->insert([
                [
                     'title'=>'Admin',
                     'title'=>'User',
                     'title'=>'Superuser'
                ],


            ]

        );
    }
}
