<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakers</title>
</head>
<body>
    <h1>Listado de Sneakers</h1>

    <a href="/sneaker/create">Crear Nuevo Sneaker</a>

    <table border="1">
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
                <a href="/sneaker/{{ $sneaker->id }}/edit">Editar</a>
            </td>
            <td>
                <form action="/sneaker/{{ $sneaker->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>