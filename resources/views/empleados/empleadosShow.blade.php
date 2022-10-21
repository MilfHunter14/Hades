<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Empleados</title>
    <link href="/img/marcas/jordan_blanco.png" rel="icon">
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

    <section class="h-100 bg-white">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
        <a class="btn btn-primary" href="/empleado">Listado de Empleados</a>
            <div class="separar">
            <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                <img src="/img/mostrarempleados1.jpg"
                    alt="Sample photo" class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
            
                    <h3 class="mb-5 text-uppercase">Detalles del Empleado</h3>

                    <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1m">Nombre</label>
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" value="{{ $empleado->nombre }}" disabled />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Apellidos</label>
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" value="{{ $empleado->apellidos }}" disabled />   
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1m1">Género</label>
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" value="{{ $empleado->genero }}" disabled />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n1">Teléfono</label>
                        <input type="text" id="form3Example1n1" class="form-control form-control-lg" value="{{ $empleado->telefono }}" disabled />
                        </div>
                    </div>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">Calle</label>
                    <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{ $empleado->calle }}" disabled />
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1m">Colonia</label>
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" value="{{ $empleado->colonia }}" disabled />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Municipio</label>
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" value="{{ $empleado->municipio }}" disabled />   
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1m">Fecha de Nacimiento</label>
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" value="{{ $empleado->fecha_nac }}" disabled />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Estado Civil</label>
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" value="{{ $empleado->estado_civil }}" disabled />   
                        </div>
                    </div>
                    </div>

                    

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    

    
</body>
</html>