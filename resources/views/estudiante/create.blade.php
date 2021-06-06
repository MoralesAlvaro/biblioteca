@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="store" :slug="$slug" btn="Guardar">
  <div class="row">
    <div class="col-sm-6">
      <x-field type="text" nameInput="codigo_estudiante" fieldName="Código Estudiante" placeholder="Ingrese Código del estudiante" maxlength="15" minlength="5" />  
    </div>
    <div class="col-sm-6">
      <x-field type="text" nameInput="nombre" fieldName="Nombres" placeholder="Ingrese el nombre del estudiante" maxlength="50" minlength="5"/> 
    </div>

    <div class="col-sm-6">
      <x-field  type="text" nameInput="apellido" fieldName="Apellidos" placeholder="Ingrese el apellido del estudiante" maxlength="50" minlength="5"/>  
    </div>
    <div class="col-sm-6">
      <x-select fieldName="Curso" paceholder="Seleccione uno" nameSelect="curso_id" :result="$curso" campo="titulo" />
    </div>
  </div> 
  <div class="input-group mb-3">
    <div class="input-group">
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" name="foto" id="foto">
            <label class="custom-file-label" for="foto" >Sustituir foto</label>
        </div>
        <!-- Mostando errores de validación -->        
        @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    </div>
  </div>
</x-form>
@endsection