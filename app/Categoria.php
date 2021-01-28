<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'nombre',
    ];

    // Una categoría tiene muchos libros (de uno a muchos)
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
