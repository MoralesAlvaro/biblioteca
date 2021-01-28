
<section class="content-header">
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
</section>
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> {{$name}}</h3>
                    </div>
                    <!-- form start -->
                    <form id="main" method="POST" action="{{ route($slug.'.'.$method, $result->id ?? '') }}" enctype="multipart/form-data" >
                        <!-- Determina cuando utilizar el campo oculto -->
                        @if ($method == 'store')
                            @csrf
                        @else
                            @method('PATCH') 
                            @csrf
                        @endif
                        <div class="row">
                            <div class="card-body">

                            <!-- Colocando elementos del form -->
                            {{ $slot }}
                            
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info sombra_boton">{{$btn}}</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>    
    </div>
    </section>
</section>
