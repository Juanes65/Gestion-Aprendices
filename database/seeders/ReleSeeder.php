<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ReleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Cocina']);

        //permisos del administrador
        Permission::create(['name' => 'admin'])->syncRoles([$role1]);
        Permission::create(['name' => 'cocina'])->syncRoles([$role2]);

        //permiso del usuario
    }
}
