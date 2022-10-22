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
    <section class="h-100 bg-white">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
            <a class="btn btn-primary" href="/sneaker">Listado de Sneakers</a>
                <div class="separar">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                    <img src="/img/mostrarSneakers.jpg"
                        alt="Sample photo" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-xl-6">
                
                        <h3 class="mb-5 text-uppercase">Detalles del Sneaker</h3>

                        <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m">Nombre</label>
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" value="{{ $sneaker->nombre }}" disabled />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n">Marca</label>
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" value="{{ $sneaker->marca }}" disabled />   
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m1">Precio</label>
                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" value="{{ $sneaker->precio }}" disabled />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n1">Talla</label>
                            <input type="text" id="form3Example1n1" class="form-control form-control-lg" value="{{ $sneaker->talla }}" disabled />
                            </div>
                        </div>
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example8">Stock</label>
                        <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{ $sneaker->stock }}" disabled />
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