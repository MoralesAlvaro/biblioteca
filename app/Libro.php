<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use SoftDeletes;
    
    //
    protected $fillable = [
        'isbn',
        'titulo',
        'autor',
        'editorial',
        'estado',
        'categoria_id',
        'curso_id',
    ];


    // Muchos libros pertenecen a una categoria (de muchos a uno)
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    // Muchos libros pertenecen a un curso (de muchos a uno)
    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    // Un libro tiene muchos prestamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
    
}
