<?php

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
         $role1 = Role::create(['name' => 'admin']);
         $role2 = Role::create(['name' => 'empleado']);
         $role3 = Role::create(['name' => 'cliente']);
		 Permission::create(['name' => 'users.index'])->syncRoles($role1,$role2);
		 Permission::create(['name' => 'users.create'])->syncRoles($role1,$role2);
		 Permission::create(['name' => 'users.edit'])->syncRoles($role1,$role2);
		 Permission::create(['name' => 'users.delete'])->syncRoles($role1);

		 Permission::create(['name' => 'cliente.dashboard'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.historial'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.credito'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.rastreo'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.cotizar'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.datos'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.direcciones'])->syncRoles($role3);
		 Permission::create(['name' => 'cliente.facturas'])->syncRoles($role3);
		   

		 //  Permission::create(['name' => '.index']);
		 // Permission::create(['name' => '.create']);
		 // Permission::create(['name' => '.edit']);
		 // Permission::create(['name' => '.delete']);
		// $role->givePermissionTo($permission);
		// $permission->assignRole($role);
    }
}
