<?php

namespace Database\Seeders;

use App\Models\categoria_documentos;
use App\Models\categoria_publicaciones;

use App\Models\gestion_documentos;
use App\Models\normativo_documentos;
use App\Models\Perfiles;

use App\Models\Sliders;
use App\Models\Tag;
use App\Models\videos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {$this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        categoria_documentos::factory(9)->create();
        categoria_publicaciones::factory(5)->create();
        Tag::factory(10)->create();
        gestion_documentos::factory(9)->create();
        normativo_documentos::factory(100)->create();
        Perfiles::factory(5)->create();
  
        Sliders::factory(5)->create();
        videos::factory(10)->create();
        $this->call(publicacionesSeeder::class);
        
    }
}
