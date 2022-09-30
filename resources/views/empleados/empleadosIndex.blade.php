<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Listado de Empleados</h1>

    <a href="/empleado/create">Registrar Empleado</a>

    <table border="1">
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
        </tr>


        @endforeach
    </table>
    
</body>
</html>