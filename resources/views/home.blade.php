@extends('layouts.headDefault')

@section('content')
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner carousel-container">
  @for ($i = 0; $i <= 4; $i++)
    <div class="{{$i === 0 ? 'carousel-item active' : 'carousel-item' }}">
      <img src="{{url('img/banner/image-'.$i.'.jpeg')}}" class="d-block w-100" alt="...">
    </div>
  @endfor
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="content">
    <br>
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{$libro}}</h3>

            <p>Libros</p>
            </div>
            <div class="icon">
              <i class="fas fa-book"></i>
            </div>
            <a href="{{ url('libros')}}" class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>{{$prestamos}}<sup style="font-size: 20px"></sup></h3>

            <p>Préstamos</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ url('prestamos') }} " class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>{{$usuarios}}</h3>

            <p>Usuarios</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('usuarios')}} " class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>{{$categorias}}</h3>

            <p>Categorías</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('categorias')}} " class="small-box-footer">Más <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
</div>
@endsection
<style>
.carousel-inner.carousel-container {
  height: 25rem
}
.carousel-inner.carousel-container img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
</style>