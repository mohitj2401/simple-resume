<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'Role Management', 'guard_name' => 'web'],
            ['name' => 'Resume Management', 'guard_name' => 'web'],

        ];

        Permission::insert($permissions);

        $datas = [
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'User', 'guard_name' => 'web'],


        ];
        Role::insert($datas);

        $admin_role = Role::where('name', 'Admin')->first();

        $admin_role->syncPermissions(['Role Management', 'Resume Management']);

        $user_role = Role::where('name', 'User')->first();

        $user_role->syncPermissions(['Resume Management']);
        # code...

    }
}
