<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' =>$this->faker->word(25),
            'descripcion' =>$this->faker->word(50),
            'usuario_id'=>User::all()->random()->id
        ];
    }
}
