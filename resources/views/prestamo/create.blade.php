@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="store" :slug="$slug" btn="Prestar">
  <div class="row">
    <div class="col-sm-6">
      <x-select fieldName="Estudiante" paceholder="Seleccione uno" nameSelect="estudiante_id" :result="$estudiante" campo="nombre" />
      <a href="{{ route('estudiantes'.'.create')}}">¿Desea registrar un nuevo estudiante?</a>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Libro</label>
        <select class="form-control select2" name="libro_id" data-placeholder="" style="width: 100%;" >
          @foreach($libro as $datos)
            @if($datos->estado == 1)
              <option value="{{$datos->id}}" {{ $datos->id == $id ? 'selected' : '' }}>{{$datos->titulo}}</option>
            @endif
          @endforeach
        </select>
        <!-- Mostando errores de validación -->
        @if ($errors->first('libro_id'))
        <span class="messages" style="color:red">    
        {{ $errors->first('libro_id') }}
        </span>
        @endif
      </div>
      <a href="{{ route('libros'.'.create')}}">¿Desea registrar un nuevo libro?</a>
    </div>
  </div> 
  <x-texttarea fieldName="Comentario" nameText="comentario" />
</x-form>
@endsection