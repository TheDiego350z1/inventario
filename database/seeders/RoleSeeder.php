<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importación de entidades de laravel permission
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
        // Creación de Roles

        //Administrador
        // $role1 = Role::create(['name' => 'admin']);
        $role1 = Role::create(['name' => 'admin']);


        // //Vendedor
        // $role2 = Role::create(['name' => 'vendedor']);

        // //Inventarios
        // $role3 = Role::create(['name' => 'inventarios']);

        // Creación de permisos
        // Permission::create(['name' => 'ejemplo'])->syncRoles([$role1]) ;
        Permission::create(['name' => 'ejemplo', 'description' => 'Ejemplo de permiso'] )->assignRole($role1);
    }
}
