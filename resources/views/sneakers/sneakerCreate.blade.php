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
    <form action="/sneaker" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">
        <br>
        <label for="precio">Precio</label>
        <input type="integer" name="precio" id="precio">
        <br>
        <label for="talla">Talla</label>
        <input type="float" name="talla" id="talla">
        <br>
        <label for="stock">Stock</label>
        <input type="integer" name="stock" id="stock">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>