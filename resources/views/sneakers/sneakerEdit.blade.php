<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/img/marcas/jordan_blanco.png" rel="icon">
    <title>Registrar Sneaker</title>
    @vite(['resources/css/bootstrap.css',
    'resources/css/style.css', 'resources/js/main.js'])

</head>
<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="#">HADES</a></h1>
                
            <div class="align-right">
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="/index">Inicio</a></li>
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
        </div>
    </header>
        <!-- End Header -->

    <section class="vh-100 bg-image" style="background-image: url('/img/createSneaker.jpg')">
    
        <div class="separar">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">    
                            <h2 class="text-uppercase text-center mb-5">Editar Sneaker</h2>

                            <form action="/sneaker/{{ $sneaker->id }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="nombre">Nombre</label>
                                    <input class="form-control form-control-lg" type="text" name="nombre" id="nombre" value="{{ $sneaker->nombre }}">
                                    @error('nombre')
                                        <i>{{ $message}}</i>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="marca">Marca</label>
                                    <input class="form-control form-control-lg" type="text" name="marca" id="marca" value="{{ $sneaker->marca}}">
                                    @error('marca')
                                        <i>{{ $message}}</i>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="precio">Precio</label>
                                    <input class="form-control form-control-lg" type="integer" name="precio" id="precio" value="{{ $sneaker->precio }}">
                                    @error('precio')
                                        <i>{{ $message}}</i>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="talla">Talla</label>
                                    <input class="form-control form-control-lg" type="float" name="talla" id="talla" value="{{ $sneaker->talla }}">
                                    @error('talla')
                                        <i>{{ $message}}</i>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="stock">Stock</label>
                                    <input class="form-control form-control-lg" type="integer" name="stock" id="stock" value="{{ $sneaker->stock }}">
                                    @error('stock')
                                        <i>{{ $message}}</i>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type=submit
                                    class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Editar</button>
                                </div>
                            </form>
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