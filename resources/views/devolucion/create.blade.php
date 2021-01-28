@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="store" :slug="$slug" btn="Prestar">
  <div class="row">
    <div class="col-sm-6">
      <x-select fieldName="Estudiante" paceholder="Seleccione uno" nameSelect="estudiante_id" :result="$estudiante" campo="nombre" />
    </div>
    <div class="col-sm-6">
      <x-select fieldName="Libro" paceholder="Seleccione uno" nameSelect="libro_id" :result="$libro" campo="titulo" />
    </div>
  </div> 
  <x-texttarea fieldName="Comentario" nameText="comentario" />
</x-form>
@endsection