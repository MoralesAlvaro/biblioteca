<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestamo extends Model
{
    use SoftDeletes;
    
    //
    protected $fillable = [
        'estudiante_id',
        'libro_id',
        'devolucion',
        'comentario'
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna

    // Muchos préstamos pertenecen a un libro
    public function libro(){
        return $this->belongsTo(Libro::class);
    }

    // Muchos préstamos pertenecen a un estudiante
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
}
