<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use SoftDeletes;

    //
    protected $fillable = [
        'codigo_estudiante',
        'nombre',
        'apellido',
        'foto',
        'curso_id'
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna

    // Un estudiante pertenece a un curso
    public function curso(){
        return $this->belongsTo('App\Curso');
    }

    // Un estudiante tiene muchos prestamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
