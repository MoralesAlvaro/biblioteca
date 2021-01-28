<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    //
    protected $fillable = [
        'titulo', 
        'codigo',
    ];

    protected $dates = ['deleted_at'];

    // Un curso tiene muchos estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    // Un curso tiene muchos libros
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
