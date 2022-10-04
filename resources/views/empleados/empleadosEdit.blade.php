<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
<body>
    <h1>Editar Empleado</h1>

    <!--Despliegue de errores-->
    @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

    <!--action lo manda al método UPDATE-->
    <form method="POST" action="/empleado/{{ $empleado->id }}">

    @csrf
    @method('PATCH')

        <label for="nombre">Nombre: </label></br>
            <input type="text" name="nombre" id="nombre"  autocomplete="off" required value="{{ old('nombre') ?? $empleado->nombre }}">
        </br>
        <label for="apellidos">Apellidos: </label></br>
            <input type="text" name="apellidos" id="apellidos" autocomplete="off" required value="{{ old('apellidos') ?? $empleado->apellidos }}">
        </br>
        <label for="genero">Género: </label><br/>
            <select name="genero" required>
                <option selected disabled>Seleccione una opción</option>
                <option value="M" {{ $empleado->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ $empleado->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                <option value="X" {{ $empleado->genero == 'X' ? 'selected' : '' }}>Prefiero no decirlo</option>
              </select>
        <br/>
        <label for="telefono">Teléfono: </label></br>
            <input type="text" name="telefono" id="telefono" autocomplete="off" min=10 max=10 required value="{{ old('telefono') ?? $empleado->telefono }}">
        </br>
        <label for="calle">Calle: </label></br>
            <input type="text" name="calle" id="calle" autocomplete="off" required value="{{ old('calle') ?? $empleado->calle }}">
        </br>
        <label for="colonia">Colonia: </label></br>
            <input type="text" name="colonia" id="colonia" autocomplete="off" required value="{{ old('colonia') ?? $empleado->colonia }}">
        </br>
        <label for="municipio">Municipio: </label></br>
            <input type="text" name="municipio" id="municipio" autocomplete="off" required value="{{ old('municipio') ?? $empleado->municipio }}">
        </br>
        <label for="fecha_nac">Fecha de Nacimiento: </label></br>
            <input type="date" name="fecha_nac" id="fecha_nac" required value="{{ old('fecha_nac') ?? $empleado->fecha_nac }}">
        </br>
        <label for="estado_civil">Estado Civil: </label><br/>
            <select name="estado_civil" required >
                <option selected disabled>Seleccione una opción</option>
                <option value="Soltero" {{ $empleado->estado_civil == 'Soltero' ? 'selected' : '' }}>Soltero</option>
                <option value="Casado" {{ $empleado->estado_civil == 'Casado' ? 'selected' : '' }}>Casado</option>
                <option value="Divorciado" {{ $empleado->estado_civil == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                <option value="Viudo" {{ $empleado->estado_civil == 'Viudo' ? 'selected' : '' }}>Viudo</option>
                <option value="Concubinato" {{ $empleado->estado_civil == 'Concubinato' ? 'selected' : '' }}>Concubinato</option>
              </select>
        <br/> 
        <br/>
        <input type=submit value="Editar">

    </form>

    
</body>
</html>