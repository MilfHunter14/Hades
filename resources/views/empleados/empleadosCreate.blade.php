<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Empleado</title>
</head>
<body>
    <h1>Registrar Empleado</h1>

    <!--action lo manda al método store-->
    <form method="POST" action="/empleado">

    @csrf

        <label for="nombre">Nombre: </label></br>
            <input type="text" name="nombre" id="nombre"  autocomplete="off" required>
        </br>
        <label for="apellidos">Apellidos: </label></br>
            <input type="text" name="apellidos" id="apellidos" autocomplete="off" required>
        </br>
        <label for="genero">Género: </label><br/>
            <select name="genero" required>
                <option selected disabled>Seleccione una opción</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="X">Prefiero no decirlo</option>
              </select>
        <br/>
        <label for="telefono">Teléfono: </label></br>
            <input type="text" name="telefono" id="telefono" autocomplete="off" min=10 max=10 required>
        </br>
        <label for="calle">Calle: </label></br>
            <input type="text" name="calle" id="calle" autocomplete="off" required>
        </br>
        <label for="colonia">Colonia: </label></br>
            <input type="text" name="colonia" id="colonia" autocomplete="off" required>
        </br>
        <label for="municipio">Municipio: </label></br>
            <input type="text" name="municipio" id="municipio" autocomplete="off" required>
        </br>
        <label for="fecha_nac">Fecha de Nacimiento: </label></br>
            <input type="date" name="fecha_nac" id="fecha_nac" required>
        </br>
        <label for="estado_civil">Estado Civil: </label><br/>
            <select name="estado_civil" required>
                <option selected disabled>Seleccione una opción</option>
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
                <option value="Viudo">Viudo</option>
                <option value="Concubinato">Concubinato</option>
              </select>
        <br/> 
        <br/>
        <input type=submit value="Guardar">

    </form>

    
</body>
</html>