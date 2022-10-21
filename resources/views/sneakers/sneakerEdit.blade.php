<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Sneakers</title>
    @vite(['resources/css/bootstrap.css',
    'resources/css/style.css', 'resources/js/main.js'])
</head>
<body>
    <h1>Crear Sneaker</h1>
    <!--Despliegue de errores-->
    @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    <ul>
                </div>
    @endif
    <div class="centrar">
        <form action="/sneaker/{{ $sneaker->id}}" method="POST" >
            @csrf
            @method('PATCH')
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $sneaker->nombre}}">
        
            <br>
            <label for="marca">Marca</label>
            <input class="form-control" type="text" name="marca" id="marca" value="{{$sneaker->marca}}">

            <br>
            <label for="precio">Precio</label>
            <input class="form-control" type="integer" name="precio" id="precio" value="{{$sneaker->precio}}">
        
            <br>
            <label for="talla">Talla</label>
            <input class="form-control" type="float" name="talla" id="talla" value="{{$sneaker->talla}}">
            <br>
            <label for="stock">Stock</label>
            <input class="form-control" type="integer" name="stock" id="stock" value="{{$sneaker->stock}}">
            <br>
            <input class="btn btn-success" type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>