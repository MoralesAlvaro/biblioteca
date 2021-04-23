<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column text-white" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->

    <!-- Sección menú Libros -->
    <x-section-menu class="{{ request()->routeIs($libros ?? '')? 'active' : '' }}" icon="fa-book" name="Biblioteca">
      <x-link-menu href="{{route('libros.index')}}" name="Libros"/>
      <x-link-menu href="{{route('prestamos.index')}}" name="Préstamos"/>
      <x-link-menu href="{{route('devoluciones.index')}}" name="Devoluciones"/>
      <x-link-menu href="{{route('categorias.index')}}" name="Categorías"/>
      <x-link-menu href="{{route('cursos.index')}}" name="Grado"/>
    </x-section-menu>

    <!-- Sección menú Personas -->
    <x-section-menu class="{{ request()->routeIs($personas ?? '')? 'active' : '' }}" icon="fa-users" name="Personas">
      <x-link-menu href="{{route('usuarios.index')}}" name="Usuarios"/>
      <x-link-menu href="{{route('estudiantes.index')}}" name="Estudiantes"/>
    </x-section-menu>

      <!-- Sección menú Reportes -->
      <x-section-menu class="{{ request()->routeIs($reportes ?? '')? 'active' : '' }}" icon="fa-edit" name="Reportes">
      <x-link-menu href="{{route('reportegeneral')}}" name="Reporte General"/>
    </x-section-menu>
  </ul>
</nav>