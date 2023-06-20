<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Créer les roles
        $adminRole = Role::create(['nom'=>'admin']);
        $editorRole = Role::create(['nom'=>'editor']);

        //création de permission
        $editeArticlesPermission=Permission::create(['nom'=>'edit articles']);
        $deleteArticlesPermission=Permission::create(['nom'=>'delete Articles']);


        //Attributions des permittions
        $adminRole->givePermissionTo($editeArticlesPermission,$deleteArticlesPermission);
        $editorRole->givePermissionTo($editeArticlesPermission);
    }
}
