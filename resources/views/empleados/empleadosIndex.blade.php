<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
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
  
            <h1>Listado de Empleados</h1>

            <a class="btn btn-primary" href="/empleado/create">Registrar Empleado</a>

            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Género</th>
                    <th>Teléfono</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Municipio</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado Civil</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

                @foreach($empleados as $empleado)
                <tr>
                    <td>
                        <!--Nos dirigira al metodo show del controlador -->
                        <a href="/empleado/{{ $empleado->id }}">   
                        {{ $empleado->nombre }}
                        </a>

                    </td>
                    <td>{{ $empleado->apellidos }}</td>
                    <td>{{ $empleado->genero }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->calle }}</td>
                    <td>{{ $empleado->colonia }}</td>
                    <td>{{ $empleado->municipio }}</td>
                    <td>{{ $empleado->fecha_nac }}</td>
                    <td>{{ $empleado->estado_civil }}</td>

                    <td>
                        <!--Nos dirigira al metodo edit del controlador -->
                        <a class="btn btn-warning" href="/empleado/{{ $empleado->id }}/edit">   
                        Editar
                        </a>

                    </td>

                    <td> 
                        <!--action lo manda al método DELETE-->
                        <form method="POST" action="/empleado/{{ $empleado->id }}">

                            <!-- Nos permite realizar la operación desde html-->
                            @csrf
                            @method('DELETE')

                            <input type=submit class="btn btn-danger" value="Eliminar">
                        </form>

                    </td>
                </tr>

                @endforeach
            </table>
        </div>

    </section><!-- End Hero -->

    
</body>
</html>