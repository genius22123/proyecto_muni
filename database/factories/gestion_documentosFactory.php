<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class gestion_documentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre=$this->faker->word(20);
        return [
            'titulo' =>$nombre,
            'slug'=>Str::slug($nombre),
            'descripcion' =>$this->faker->text(100),
            'url' =>'gestion/prueba.pdf',
            'usuario_id' =>User::all()->random()->id
        ];
    }
}
