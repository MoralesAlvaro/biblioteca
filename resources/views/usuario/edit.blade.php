@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registro" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="update" :slug="$slug" btn="Guardar" :result="$data">
  <div class="row">
    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="name" fieldName="Nombre" placeholder="Ingrese el nombre del usuario" maxlength="50" minlength="5"/>  
    </div>
    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="lastName" fieldName="Apellido" placeholder="Ingrese el apellido del usuario" maxlength="100" minlength="4"/> 
    </div>

    <div class="col-sm-12">
      <x-field-edit :result="$data" type="email" nameInput="email" fieldName="Correo electrónico" placeholder="Ingrese el correo electrónico" maxlength="50" minlength="5"/>  
    </div> 

  </div> 
  <div class="row">
    <div class="col-sm-12" >
      <x-card result="Foto Actual">
        <div class="col-3 text-center">
          <x-img-card :src="$data->photo" alt="Estudiante: {{$data->name}}" class="img-circle img-fluid" />
        </div>
        <div class="col-sm-9">
          <x-input-img nameLabel="Sustituir Foto" nameInput="photo" />      
        </div>
      </x-card>
    </div>
  </div>    
</x-form>
@endsection