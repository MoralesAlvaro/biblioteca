@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registro" :slug="$slug.'.index'"></x-btn>

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

<x-form :name="$nameForm" method="update" :slug="$slug" btn="Guardar" :result="$data">
  <div class="row">

    <div class="col-sm-6">
      <div class="form-group">
        <label>Estudiante</label>
        <select class="form-control select2" name="estudiante_id" data-placeholder="" style="width: 100%;" value="{{ old('estudiante_id') }}" >
          @foreach($estudiante as $item)
            @if($data->estudiante_id == $item->id)
              <option selected="true" value="{{$item->id}}">{{$item->nombre}}</option>
            @else
              <option value="{{$item->nombre}}">{{$item->nombre}}</option>
            @endif
          @endforeach      
        </select>
        <!-- Mostando errores de validación -->
        @if ($errors->first('estudiante_id'))
        <span class="messages" style="color:red">    
        {{ $errors->first('estudiante_id') }}
        </span>
        @endif
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Libro</label>
        <select class="form-control select2" name="libro_id" data-placeholder="" style="width: 100%;" value="{{ old('libro_id') }}" >
          @foreach($libro as $datos)
            @if($datos->id == $data->libro_id)
              <option selected="true" value="{{$datos->id}}">{{$datos->titulo}}</option>
            @endif
            @if($datos->estado == 'Disponible')
              <option value="{{$datos->id}}">{{$datos->titulo}}</option>
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
    </div>
  </div>  
  <div class="">
    <!-- textarea -->
    <div class="form-group">
      <label>Comentario</label>
      <textarea name="comentario" id="comentario" class="form-control" rows="3" value="">
      {{$data->comentario}}
      </textarea>
    </div>
  </div>
</x-form>
@endsection