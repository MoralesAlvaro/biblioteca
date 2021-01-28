@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registro" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="update" :slug="$slug" btn="Guardar" :result="$data">
  <x-field-edit type="text" nameInput="nombre" :result='$data' fieldName="Categoría" 
  />  
</x-form>
@endsection