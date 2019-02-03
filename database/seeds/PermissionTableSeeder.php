<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            'patient-list',
            'patient-create',
            'patient-edit',
            'patient-delete',
            'prescriptions-list',
            'prescriptions-create',
            'prescriptions-edit',
            'prescriptions-delete',
            'appointments-list',
            'appointments-create',
            'appointments-edit',
            'appointments-delete',
            'inventory-list',
            'inventory-create',
            'inventory-edit',
            'inventory-delete',
            'users-list',
            'users-create',
            'users-edit',
            'users-delete',
            'Administer roles & permissions'
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
