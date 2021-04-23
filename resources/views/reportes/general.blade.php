@extends('layouts.headTable')

@section('content')
<x-btn nameBtn="Exportar a PDF" slug="reporteXport"></x-btn>

<br>
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

<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{$panel}}</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            @foreach($encabezados as $key)
            <th>{{$key}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach($data as $datos)
            <tr>
              <td>{{$datos->id}}</td>
              <td>{{$datos->estudiante->nombre}}</td>
              <td>{{$datos->libro->titulo}}</td>
              <td>{{$datos->created_at->format('j F, Y')}}</td>
            </tr> 
          @endforeach
        
        </tbody>
        <tfoot>
          <tr>
          <!-- Paginado -->
            @foreach($encabezados as $key)
              <th>{{$key}}</th>
            @endforeach
          </tr>
        </tfoot>
      </table>
  </div>
  <!-- /.card-body -->
</div>

@endsection