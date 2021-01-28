@extends('layouts.headTable')

@section('content')

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
          <th>Ver</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $datos)
          @if($datos->libro->estado != 'Prestado')
          <tr>
            <td>{{$datos->id}}</td>
            <td>{{$datos->estudiante->nombre}}</td>
            <td>{{$datos->libro->titulo}}</td>
            <td>{{$datos->created_at->format('j F, Y')}}</td>
            <td>
              <a href="{{ route($slug.'.show',$datos->id)}}" class="btn btn-sm btn-success">Ver</a>
            </td>
            <td>
              <a href="{{ route($slug.'.edit',$datos->id)}}" class="btn btn-sm btn-primary">Editar</a>
            </td>
            <td>
              <!-- Eliinar el registro a travez del modal que está más abajo -->
              <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-{{$datos->id}}">
                Eliminar
              </button>
            </td>
          </tr>
          <!-- Modal Eliminar-->
          <div class="modal fade" id="modal-{{$datos->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p class="text-center">Eliminar Registro<i class="fa fa-commenting-o fa-4x" ></i></p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="p-2 bg-danger text-white">¿En serio quieres eliminar el registro?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" id="ko">No</button>
                  <form id="form_eliminar" action="{{ route($slug.'.destroy', $datos->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" id="ok">Si</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal Eliminar-->   
          @endif 
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