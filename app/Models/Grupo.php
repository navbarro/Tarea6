<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'estudiante_grupo');
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_grupo');
    }
}
