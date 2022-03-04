<?php

namespace Database\Factories;

use App\Models\categoria_documentos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class normativo_documentosFactory extends Factory
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
            'url' =>'gestion/prueba.pdf',
            'fecha' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'categoria_documentos_id'=>categoria_documentos::all()->random()->id,
            'usuario_id'=>User::all()->random()->id
        ];
    }
}
