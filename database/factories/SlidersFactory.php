<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SlidersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nombre' =>$this->faker->sentence(),
        'url'=>'sliders/slider1.jpg',
        ];
    }
}
