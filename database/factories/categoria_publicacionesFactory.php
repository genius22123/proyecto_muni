<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class categoria_publicacionesFactory extends Factory
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
            'nombre' =>$nombre,
            'slug'=>Str::slug($nombre),
            'descripcion' =>$this->faker->word(20),
            'color' => $this->faker->randomElement(['dark','success','info','danger','secondary','primary','white','light','warning'])
        ];
    }
}
