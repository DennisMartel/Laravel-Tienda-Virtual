<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'Usuarios']);
        Permission::create(['name' => 'Productos']);
        Permission::create(['name' => 'Ordenes']);
        Permission::create(['name' => 'Estadisticas']);
        Permission::create(['name' => 'Reportes']);

        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
    }
}
