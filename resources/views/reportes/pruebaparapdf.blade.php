


<html>

  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>Cabecera de mi documento</h1>
    <h2>DesarrolloWeb.com</h2>
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              Desarrolloweb.com
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <div id="content">
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
  </div>
</body>
</html>