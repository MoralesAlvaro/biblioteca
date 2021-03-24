@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Regresar a lista de libros" :slug="$slug.'.index'" />

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

<x-card :result="$result->titulo">
  <div class="col-5">
    <x-p-card :result="$result->titulo" nameLabel="Título" icono="" />
    <x-p-card :result="$result->isbn" nameLabel="ISBN" icono="" />
    <x-p-card :result="$result->autor" nameLabel="Autor" icono="" />
    <x-p-card :result="$result->editorial" nameLabel="Editorial" icono="" />
  </div>

  <div class="col-5">
    <x-p-card :result="$result->estado" nameLabel="Estado" icono="" />
    <x-p-card :result="$result->curso->titulo" nameLabel="Curso" icono="" />
    <x-p-card :result="$result->categoria->nombre" nameLabel="Categoría" icono="" />
    <x-p-card :result="$result->numero_hojas" nameLabel="Páginas" icono="" />
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