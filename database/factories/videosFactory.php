<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class videosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' =>$this->faker->sentence(),
            'etiqueta' =>$this->faker->word(5),
            'color' => $this->faker->randomElement(['dark','success','info','danger','secondary','primary','white','light','warning']),
            'url'=>$this->faker->randomElement(
                ['https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2Fgobiernolocaltaraco%2Fvideos%2F405420747811388%2F&show_text=false&width=560&t=0',
                'https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2Fgobiernolocaltaraco%2Fvideos%2F205931354841935%2F&show_text=false&width=560&t=0',
                'https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2Fgobiernolocaltaraco%2Fvideos%2F455571652498912%2F&show_text=false&width=560&t=0',
                'https://www.facebook.com/plugins/video.php?height=280&href=https%3A%2F%2Fwww.facebook.com%2Fgobiernolocaltaraco%2Fvideos%2F422091895968406%2F&show_text=false&width=560&t=0',
               ]),

               'imagen'=>'publicaciones/video2.png)',
         

        ];
    }
}
