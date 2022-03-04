<?php

namespace Database\Factories;

use App\Models\categoria_publicaciones;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titulo=$this->faker->sentence();
        return [
            'titulo' =>$titulo,
            'slug'=>Str::slug($titulo),
            'extracto' =>$this->faker->text(250),
            'cuerpo' =>$this->faker->text(3000),
            'estado' =>$this->faker->randomElement([1,2]),
            'fecha'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'categoria_publicaciones_id'=>categoria_publicaciones::all()->random()->id,
            'usuario_id'=>User::all()->random()->id
        ];
    }
}
