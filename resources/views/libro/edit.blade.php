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
    <div class="col-sm-12">
      <x-field-edit :result="$data" type="text" nameInput="titulo" fieldName="Titulo" placeholder="Ingrese Código del estudiante" maxlength="50" minlength="5"/>  
    </div>
    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="isbn" fieldName="ISBN" placeholder="Ingrese el isbn del libro" maxlength="20" minlength="5"/> 
    </div>
    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="autor" fieldName="Autor" placeholder="Ingrese el nombre del autor" maxlength="50" minlength="5"/>  
    </div>

    <div class="col-sm-6">
      <x-field-edit :result="$data" type="text" nameInput="editorial" fieldName="Editorial" placeholder="Ingrese el nombre de la editorial" maxlength="150" minlength="5"/>  
    </div>

    <div class="col-sm-6">
      <x-field-edit :result="$data" type="number" nameInput="numero_hojas" fieldName="Páginas" placeholder="Ingrese el número de páginas del libro" maxlength="11" />  
    </div>

    <input type="hidden" class="form-control" name="estado" id="estado" value="{{$data->estado}}">

    <div class="col-sm-6">
      <div class="form-group">
        <label>Grado</label>
        <select class="form-control select2" name="curso_id" data-placeholder="" style="width: 100%;" value="{{ old('curso_id') }}" >
          @foreach($curso as $item)
            @if($item->id == $data->curso_id)
              <option selected="true" value="{{$item->id}}">{{$item->titulo}}</option>
            @else
              <option value="{{$item->id}}">{{$item->titulo}}</option>
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

    <div class="col-sm-6">
      <div class="form-group">
        <label>Categoría</label>
        <select class="form-control select2" name="categoria_id" data-placeholder="" style="width: 100%;" value="{{ old('categoria_id') }}" >
          @foreach($categoria as $item)
            @if($item->id == $data->categoria_id)
              <option selected="true" value="{{$item->id}}">{{$item->nombre}}</option>
            @else
              <option value="{{$item->id}}">{{$item->nombre}}</option>
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
</x-form>
@endsection