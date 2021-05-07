<html>

<body class="container-document">
  <header>
    <h1>Reporte de Prestamos</h1>
    <h2>Fecha: {{date('d-m-Y')}}</h2>
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
      <table id="example1" class="table table-bordered table-striped table-dark">
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
<style>
  .container-document {
    padding-bottom: 1rem;
  }

  body {
    font-family: sans-serif;
  }

  @page {
    margin: 160px 50px;
  }

  header {
    position: fixed;
    left: 0px;
    top: -140px;
    right: 0px;
    height: 100px;
    text-align: center;
  }

  header h1 {
    margin: 10px 0;
  }

  header h2 {
    margin: 0 0 10px 0;
  }

  footer {
    position: fixed;
    left: 0px;
    bottom: -50px;
    right: 0px;
    height: 40px;
    padding-bottom: 0.5rem;
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

  table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    overflow: hidden;
  }

  td,
  th {
    border-top: 1px solid #ECF0F1;
    padding: 10px;
    text-align: center;
  }

  td {
    border-left: 1px solid #ECF0F1;
    border-right: 1px solid #ECF0F1;
  }

  th {
    background-color: #279df4;
  }
</style>

</html>