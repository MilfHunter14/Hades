<!DOCTYPE html>
<html lang="en">
<x-head titulo="Empleados">

    <x-navbar></x-navbar>


        <!-- ======= Hero Section ======= -->
        <section class="table-responsive-md">

            <div class="container">
    
                <h1>Listado de Empleados</h1>

                <a class="btn btn-primary" href="/empleado/create">Registrar Empleado</a>
                <br><br>
                <table class="table">
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
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    @if (session('status'))
                        <input type="text" name="status" value="{{session('status')}}" class="form-control" disabled>
                    @endif
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

                        <td>
                            <!--Nos dirigira al metodo edit del controlador -->
                            <a class="btn btn-warning" href="/empleado/{{ $empleado->id }}/edit">   
                            Editar
                            </a>

                        </td>

                        <td> 
                            <!--action lo manda al método DELETE-->
                            <form method="POST" action="/empleado/{{ $empleado->id }}">

                                <!-- Nos permite realizar la operación desde html-->
                                @csrf
                                @method('DELETE')

                                <input type=submit class="btn btn-danger" value="Eliminar">
                            </form>

                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>

        </section><!-- End Hero -->
 
</x-head>
</html>