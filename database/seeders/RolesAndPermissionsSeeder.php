<?php


namespace Database\Seeders;

//use Spatie\Permission\Traits\HasPermissions;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    //use HasPermissions;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Créer les roles
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        //$adminRole->delete();

        $editorRole = Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'web']);
        //$editorRole->delete();

        /*$adminRole = Role::findByName('admin', 'web');
        $adminRole->delete();
        $adminRole = Role::findByName('editor', 'web');
        $adminRole->delete();
        $adminRole = Role::create(['name'=>'admin']);
        $editorRole = Role::create(['name'=>'editor']);*/

        //création de permission
        $editeArticlesPermission=Permission::create(['name'=>'edit articles']);
        $deleteArticlesPermission=Permission::create(['name'=>'delete Articles']);


        //Attributions des permittions
        $adminRole->syncPermissions($editeArticlesPermission,$deleteArticlesPermission);
        $editorRole->syncPermissions($editeArticlesPermission);
    }
}
