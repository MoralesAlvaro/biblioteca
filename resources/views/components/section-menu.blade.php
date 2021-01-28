<li {{ $attributes->merge(['class' => 'nav-item has-treeview']) }}>
    <a href="#" class="nav-link">
        <i class="nav-icon fas {{$icon}}"></i>
        <p>
            {{$name}}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <!-- Aquí van los iten de cada sección -->
        {{$slot}}
    </ul>
</li>