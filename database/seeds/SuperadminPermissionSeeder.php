<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class SuperadminPermissionSeeder extends Seeder
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
        // $this->call(UsersTableSeeder::class);
//        DB::table('users')->delete();
        //1) Create Admin Role
        $role = ['name' => 'superadmin'];
        $role = Role::create($role);
        //2) Set Role Permissions
        // Get all permission, swift through and attach them to the role
        $permission = Permission::get();
        foreach ($permission as $key => $value) {
            $role->givePermissionTo($value);
        }

        //3) Create Admin User
        $user = ['name' => 'superadmin','username' => 'superadmin',
            'slug' => 'superadmin','email' => 'superadmin@coredev.ph','address' =>300, 'password' => Hash::make('123456')];
        $user = User::create($user);

        //4) Set User Role
        $user->assignRole($role);

    }
}

