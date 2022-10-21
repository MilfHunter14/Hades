<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakers</title>
    <link href="/img/marcas/jordan_blanco.png" rel="icon">
    <!--Método que le permite darle estilo a las vistas-->
    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap1.js', 
    'resources/css/style.css', 'resources/js/main.js'])
</head>
<body>

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

     <!-- ======= Hero Section ======= -->
    <section class="table-responsive-md">

        <div class="container">
            <h1>Listado de Sneakers</h1>
            <a class="btn btn-primary" href="/sneaker/create">Crear Nuevo Sneaker</a>
            <br><br>
            <table class="table" border="1">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Talla</th>
                    <th>Stock</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                @foreach($sneakers as $sneaker)
                <tr>
                    <td>{{ $sneaker->id }}</td>
                    <td>
                        <a href="/sneaker/{{ $sneaker->id }}">
                            {{ $sneaker->nombre }}
                        </a>
                    </td>
                    <td>{{ $sneaker->marca }}</td>
                    <td>{{ $sneaker->precio }}</td>
                    <td>{{ $sneaker->talla }}</td>
                    <td>{{ $sneaker->stock }}</td>
                    <td>
                        <a class="btn btn-warning" href="/sneaker/{{ $sneaker->id }}/edit">Editar</a>
                    </td>
                    <td>
                        <form action="/sneaker/{{ $sneaker->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
</body>
</html>