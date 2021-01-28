@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registro" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="update" :slug="$slug" btn="Guardar" :result="$data">
  <div class="row">
    <div class="col-md-6">
      <x-field-edit type="text" nameInput="titulo" :result='$data' fieldName="Categoría" />
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <x-field-edit type="text" nameInput="codigo" :result='$data' fieldName="Código" maxlength="15" />
      </div>
    </div>
  </div>
</x-form>
@endsection