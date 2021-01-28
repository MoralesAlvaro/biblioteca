@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Retornar" :slug="$slug.'.index'" />

<div class="container">
  <!-- Mensaje de confirmación -->
  @if (session('success'))
  <div class="alert alert-success text-center msg alert-dismissible fade show" id="success" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <!-- EDN Mensaje de confirmación -->
</div>

<x-card :result="$result->estudiante->nombre">
  <div class="col-5">
    <p class="text-muted"><b><i class=""></i> Prestado por :</b><a href="{{ route('estudiantes.show',$result->estudiante->id)}}"> {{$result->estudiante->nombre}}  </a> </p>
    <x-p-card :result="$result->libro->curso->titulo" nameLabel="Curso" icono="" />
    @php
    $estado = $result->libro->estado != 'Prestado'? 'Devuelto': 'Prestado';
    @endphp
    <x-p-card :result="$estado" nameLabel="Estado" icono="" />
    <x-p-card :result="$result->created_at->format('j F, Y')" nameLabel="Fecha prestado" icono="" />
    <x-p-card :result="$result->comentario" nameLabel="Comentario" icono="" />
  </div>

  <div class="col-5">
    <p class="text-muted"><b><i class=""></i> Libro :</b><a href="{{ route('libros.show',$result->libro->id)}}"> {{$result->libro->titulo}}  </a> </p>
    <x-p-card :result="$result->libro->isbn" nameLabel="ISBN " icono="" />
    <x-p-card :result="$result->libro->autor" nameLabel="Autor " icono="" />
    <x-p-card :result="$result->libro->editorial" nameLabel="Editorial " icono="" />
    <x-p-card :result="$result->libro->categoria->nombre" nameLabel="Categoria " icono="" />
    <div class="col-sm-2">
  </div>
  </div>

  <div class="col-sm-5">  
  </div>
  <div class="col-sm-2">
    <a style="margin: 19px;" href="{{ route($slug.'.edit',$result->id)}}" class="btn btn-sm btn-primary
    sombra_boton btn-block">Editar</a>
  </div>
  <div class="col-sm-5">  
  </div>

</x-card>

@endsection