<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\User;
use Spatie\Permission\Models\Role;


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
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete'
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        $admin = Role::create(['name' => 'Administrador']);
        $admin -> givePermissionTo([
          'role-list',
          'role-create',
          'role-edit',
          'role-delete',
          'product-list',
          'product-create',
          'product-edit',
          'product-delete',
          'user-list',
          'user-create',
          'user-edit',
          'user-delete'
        ]);
        $basicUser = Role::create(['name' => 'Basico']);
        $basicUser -> givePermissionTo([
          'product-list'
        ]);
        $user = User::find(1);
        $user -> assignRole('Administrador');
        $user = User::find(2);
        $user -> assignRole('Basico');
    }
}
