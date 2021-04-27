@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="store" :slug="$slug" btn="Guardar">
  <div class="row">
    <div class="col-md-6">
      <x-field type="text" nameInput="titulo" fieldName="Grado" placeholder="Ingrese el nombre del Grado" maxlength="" />
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <x-field type="text" nameInput="codigo" fieldName="Código" placeholder="Ingrese el código" maxlength="15" />
      </div>
    </div>
  </div>
</x-form>
@endsection