<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Libro extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
            'id'                => $this->id,
            'isbn'              => $this->isbn,
            'titulo'            => $this->titulo,
            'autor'         => $this->autor,
            'editorial'         => $this->editorial,
            'estado'            => $this->estado,
            'categoria_id'      => $this->cateogria_id,
            'categoria_nombre'         => $this->categoria->nombre, // Devolviendo el nombre de la categoría
            'curso_id'       => $this->curso_id,
            'curso_titulo'         => $this->curso->titulo, // Devolviendo el título del curso
            'created_at'        => $this->created_at->format('d-m-y'),
            'updated_at'        => $this->updated_at->format('d-m-y'),
        ];
    }
}
