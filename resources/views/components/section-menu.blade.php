<li {{ $attributes->merge(['class' => 'nav-item has-treeview']) }}>
    <a href="#" class="nav-link">
        <i class="nav-icon text-white fas {{$icon}}"></i>
        <p class="text-white">
            {{$name}}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview text-white">
        <!-- Aquí van los iten de cada sección -->
        {{$slot}}
    </ul>
</li>