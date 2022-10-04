<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Sneakers</title>
</head>
<body>
    <h1>Crear Sneaker</h1>
    <form action="/sneaker/{{ $sneaker->id}}" method="POST" >
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $sneaker->nombre}}">
        <br>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value="{{$sneaker->marca}}">
        <br>
        <label for="precio">Precio</label>
        <input type="integer" name="precio" id="precio" value="{{$sneaker->precio}}">
        <br>
        <label for="talla">Talla</label>
        <input type="float" name="talla" id="talla" value="{{$sneaker->talla}}">
        <br>
        <label for="stock">Stock</label>
        <input type="integer" name="stock" id="stock" value="{{$sneaker->stock}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>