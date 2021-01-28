@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registro" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="update" :slug="$slug" btn="Guardar" :result="$data">
  <div class="row">
    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="codigo_estudiante" fieldName="Código Estudiante" placeholder="Ingrese Código del estudiante" maxlength="15" minlength="5"/>  
    </div>
    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="nombre" fieldName="Nombres" placeholder="Ingrese el nombre del estudiante" maxlength="50" minlength="5"/> 
    </div>

    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="apellido" fieldName="Apellidos" placeholder="Ingrese el apellido del estudiante" maxlength="50" minlength="5"/>  
    </div>
    <div class="col-sm-6">
      <x-select fieldName="Curso" paceholder="Seleccione uno" nameSelect="curso_id" :result="$curso" campo="titulo" />
    </div>
  </div> 
  <div class="row">
    <div class="col-sm-12" >
      <x-card result="Foto Actual">
        <div class="col-3 text-center">
          <x-img-card :src="$data->foto" alt="Estudiante: {{$data->nombre}}" class="img-circle img-fluid" />
        </div>
        <div class="col-sm-9">
          <x-input-img nameLabel="Sustituir Foto" nameInput="foto" />      
        </div>
      </x-card>
    </div>
  </div>    
</x-form>
@endsection