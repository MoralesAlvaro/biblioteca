@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="store" :slug="$slug" btn="Guardar">
  <x-field type="text" nameInput="nombre" fieldName="Categoría" placeholder="Ingrese la categoría"  maxlength="100" minlength="5"/>  
</x-form>
@endsection