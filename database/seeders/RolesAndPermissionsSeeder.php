<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créez les rôles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Créez des permissions
        $dashboardPermission = Permission::create(['name' => 'view dashboard']);

        // Assignez des permissions au rôle admin
        $adminRole->givePermissionTo($dashboardPermission);
    }

}
