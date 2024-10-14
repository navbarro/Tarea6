<?php

namespace Database\Seeders;

use App\Models\Curso; // Asegúrate de que el namespace esté correcto
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Curso::factory(100)->create(); // Cambia 'Course' a 'Curso'
    }
}
