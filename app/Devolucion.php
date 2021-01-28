<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Devolucion extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'estudiante_id',
        'libro_id',
        'comentario',
    ];

    // Muchas devoluciones pertenecen a un libro
    public function libro(){
        return $this->belongsTo(Libro::class);
    }

    // Muchas devoluciones pertenecen a un estudiante
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
}
