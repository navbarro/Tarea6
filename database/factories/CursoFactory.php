<?php

namespace Database\Factories;

use App\Models\Curso; 
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kit;
class CursoFactory extends Factory
{
    protected $model = Curso::class; 
    
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, 
            'cover_image' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph,
            'robotics_kit' => Kit::inRandomOrder()->first()->id
        ];
    }
}
