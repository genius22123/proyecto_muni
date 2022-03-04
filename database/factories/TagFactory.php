<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
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
            'color' => $this->faker->randomElement(['dark','success','info','danger','secondary','primary','white','light','warning']),

        ];
    }
}
