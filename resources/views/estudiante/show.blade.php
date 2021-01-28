@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Retornar" :slug="$slug.'.index'" />

<x-card :result="$result->nombre.' '.$result->apellido">
  <div class="col-5 text-center">
    <x-img-card :src="$result->foto" alt="Estudiante: {{$result->nombre}}" class="img-circle img-fluid" />
  </div>
  <div class="col-7">
    <x-p-card :result="$result->nombre.' '.$result->apellido" nameLabel="Nombre" icono="fas fa-user" />
    <x-p-card :result="$result->codigo_estudiante" nameLabel="Código" icono="fas fa-barcode" />
    <x-p-card :result="$result->curso->codigo" nameLabel="Código curso" icono="fas fa-stream" />
    <x-p-card :result="$result->curso->titulo" nameLabel="Nombre Cruso" icono="fas fa-stream" />
    <div>
        <a style="margin: 19px;" href="{{ route($slug.'.edit',$result->id)}}" class="btn btn-sm btn-primary
 sombra_boton">Editar</a>
    </div>
  </div>
</x-card>

@endsection