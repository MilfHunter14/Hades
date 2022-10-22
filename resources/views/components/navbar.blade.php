<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ url('/') }}">HADES</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}">Inicio</a></li>
                    <li class="dropdown"><a href="#"><span>Gestión de Recursos</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/empleado">Agregar Empleado</a></li>
                        <li><a href="/sneaker">Agregar Sneaker</a></li>
                    </ul>
                </ul>
                <i class="bi bi-list mobile-nav-toggle">≡</i>
            </nav>
            <!-- .navbar -->  
    </div>
</header>
    <!-- End Header -->
<body>
    {{ $slot }}
</body>