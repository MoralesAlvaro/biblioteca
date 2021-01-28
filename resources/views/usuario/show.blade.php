@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Retornar" :slug="$slug.'.index'" />

<x-card :result="$result->name.' '.$result->lastName">
  <div class="col-5 text-center">
    <x-img-card :src="$result->photo" alt="Usuario: {{$result->name}}" class="img-circle img-fluid" />
  </div>
  <div class="col-7">
    <x-p-card :result="$result->name.' '.$result->lastName" nameLabel="Nombre" icono="fas fa-user" />
    <x-p-card :result="$result->email" nameLabel="Correo" icono="fas fa-envelope" />
    <div>
        <a style="margin: 19px;" href="{{ route($slug.'.edit',$result->id)}}" class="btn btn-sm btn-primary
 sombra_boton">Editar</a>
    </div>
  </div>
</x-card>

@endsection