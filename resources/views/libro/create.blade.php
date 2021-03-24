@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>
<x-form :name="$nameForm" method="store" :slug="$slug" btn="Guardar">
  <div class="row">
    <div class="col-sm-12">
      <x-field type="text" nameInput="titulo" fieldName="Título" placeholder="Ingrese el título del libro" maxlength="50" minlength="5"/> 
    </div>
    <div class="col-sm-6">
      <x-field type="text" nameInput="isbn" fieldName="ISBN" placeholder="Ingrese Código ISBN" maxlength="20" minlength="2" />  
    </div>
    <div class="col-sm-6">
      <x-field  type="text" nameInput="autor" fieldName="Autor" placeholder="Ingrese el nombre completo del autor" maxlength="150" minlength="5"/>  
    </div>
    
    <div class="col-sm-6">
      <x-field  type="text" nameInput="editorial" fieldName="Editorial" placeholder="Ingrese el nombre completo de la editorial" maxlength="150" minlength="5"/>  
    </div>

    <div class="col-sm-6">
      <x-field type="number" nameInput="numero_hojas" fieldName="Páginas" placeholder="Ingrese el número de páginas del libro" maxlength="11"/> 
    </div>

    <input type="hidden" class="form-control" name="estado" id="estado" value="1">

    <div class="col-sm-6">
      <x-select fieldName="Curso" paceholder="Seleccione uno" nameSelect="curso_id" :result="$curso ?? ''" campo="titulo" />
    </div>
    <div class="col-sm-6">
      <x-select fieldName="Categoría" paceholder="Seleccione uno" nameSelect="categoria_id" :result="$categoria" campo="nombre" />
    </div>
  </div> 
</x-form>
@endsection