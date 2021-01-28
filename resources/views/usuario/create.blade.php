@extends('layouts.headDefault')

@section('content')
<x-btn nameBtn="Ver Registros" :slug="$slug.'.index'"></x-btn>

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

<div class="hold-transition register-page">
  <div class="register-box">
  <div class="register-logo">
    <b>BVU</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrar un nuevo usuario</p>
     
      <form method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
          <input id="name" type="text" class="form-control" placeholder="Ingrese el nombre del usuario" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input id="lastName" type="text" class="form-control" placeholder="Ingrese el apellido del usuario" name="lastName" value="{{ old('lastName') }}" autocomplete="lastName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required autocomplete="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password_confirmation" type="password" class="form-control" placeholder="Confirme contraseña" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <div class="input-group">
              <div class="custom-file">
                  <input type="file" accept="image/*" class="custom-file-input" name="photo" id="photo">
                  <label class="custom-file-label" for="photo">Buscar foto</label>
              </div>
              <!-- Mostando errores de validación -->        
              @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>
        </div>
          <!-- /.col -->
          <div class="">
            <button type="submit" class="btn btn-primary btn-block sombra_boton">Registrar</button>            
          </div>
          <!-- /.col -->
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

@endsection