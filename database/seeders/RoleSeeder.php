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
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Blogger']);

        Permission::create(['name'=>'Ver dashboard-Home'])->syncRoles([$role1,$role2]);

            /* ROLES */
            Permission::create(['name'=>'Listado de roles'])->syncRoles([$role1]);
            Permission::create(['name'=>'Crear roles'])->syncRoles([$role1]);
            Permission::create(['name'=>'Editar roles'])->syncRoles([$role1]);
            Permission::create(['name'=>'Eliminar roles'])->syncRoles([$role1]);

        /* USUARIOS */
        Permission::create(['name'=>'Listado de Usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'Crear usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'Editar usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'Eliminar usuarios'])->syncRoles([$role1]);

  /* CATEGORIAS -PUBLICACIONES */
        Permission::create(['name'=>'Listado de categorias-publicaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'Crear categoria-publicaciones'])->syncRoles([$role1]);
        Permission::create(['name'=>'Editar categoria-publicaciones'])->syncRoles([$role1]);
        Permission::create(['name'=>'Eliminar categoria-publicaciones'])->syncRoles([$role1]);

 /* CATEGORIAS -ETIOQUETAS */
        Permission::create(['name'=>'Listado etiquetas-publicaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'Crear etiquetas-publicaciones'])->syncRoles([$role1]);
        Permission::create(['name'=>'Editar etiquetas-publicaciones'])->syncRoles([$role1]);
        Permission::create(['name'=>'Eliminar etiquetas-publicaciones'])->syncRoles([$role1]);

         /* PUBLICACIONES */
        Permission::create(['name'=>'Listado publicaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'Crear publicaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'Editar publicaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'Eliminar publicaciones'])->syncRoles([$role1,$role2]);


         /* SLIDER */

         Permission::create(['name'=>'Listado slider'])->syncRoles([$role1]);
         Permission::create(['name'=>'Crear slider'])->syncRoles([$role1]);
         Permission::create(['name'=>'Editar slider'])->syncRoles([$role1]);
         Permission::create(['name'=>'Eliminar slider'])->syncRoles([$role1]);

         
         /* VIDEOS */

         Permission::create(['name'=>'Listado videos'])->syncRoles([$role1]);
         Permission::create(['name'=>'Crear videos'])->syncRoles([$role1]);
         Permission::create(['name'=>'Editar videos'])->syncRoles([$role1]);
         Permission::create(['name'=>'Eliminar videos'])->syncRoles([$role1]);

           /* DOCUMENTOS NORMATIVOS CATEGORIA */

           Permission::create(['name'=>'Listado documentos normativos-categoria'])->syncRoles([$role1]);
           Permission::create(['name'=>'Crear documentos normativos-categoria'])->syncRoles([$role1]);
           Permission::create(['name'=>'Editar documentos normativos-categoria'])->syncRoles([$role1]);
           Permission::create(['name'=>'Eliminar documentos normativos-categoria'])->syncRoles([$role1]);

           
           /* DOCUMENTOS NORMATIVOS  */

           Permission::create(['name'=>'Listado documentos normativos'])->syncRoles([$role1]);
           Permission::create(['name'=>'Crear documentos normativos'])->syncRoles([$role1]);
           Permission::create(['name'=>'Editar documentos normativos'])->syncRoles([$role1]);
           Permission::create(['name'=>'Eliminar documentos normativos'])->syncRoles([$role1]);
              /* DOCUMENTOS GESTION  */

              Permission::create(['name'=>'Listado documentos gestion'])->syncRoles([$role1]);
              Permission::create(['name'=>'Crear documentos gestion'])->syncRoles([$role1]);
              Permission::create(['name'=>'Editar documentos gestion'])->syncRoles([$role1]);
              Permission::create(['name'=>'Eliminar documentos gestion'])->syncRoles([$role1]);

    }
}
