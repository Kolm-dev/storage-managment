<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        $permissions = [
            'view_product',
            'create_product',
            'edit_product',
            'delete_product',
            'delete_user',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        
        $userRole = Role::findOrCreate('user');
        $userRole->syncPermissions(['view_product', 'create_product', 'edit_product']);

        
        $adminRole = Role::findOrCreate('admin');
        $adminRole->syncPermissions($permissions); 
    }
}
