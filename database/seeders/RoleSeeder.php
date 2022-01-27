<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $role = Role::create(['name' => 'SuperAdmin']);
        $role = Role::create(['name' => 'AdminKargo']);
        $role = Role::create(['name' => 'AdminRetail']);
        $role = Role::create(['name' => 'Station']);
        $role = Role::create(['name' => 'Kurir']);
        $role = Role::create(['name' => 'delete']);
    }
}
