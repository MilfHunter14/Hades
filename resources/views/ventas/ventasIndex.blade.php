<!DOCTYPE html>
<html lang="en">
<x-head titulo="Ventas">

    <x-navbar></x-navbar>


        <!-- ======= Hero Section ======= -->
        <section class="table-responsive-md">

            <div class="container">
    
                <h1>Listado de Ventas de Empleados</h1>

                <a class="btn btn-primary" href="/venta/create">Registrar Venta</a>

                <table class="table">
                    <tr>
                        <th>ID de la Venta</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Modelo</th> 
                        <th>Fecha de la Venta</th>
                        <th>Tipo de Pago</th>
                        <th>Editar</th>
                        <th>Eliminar</th>    
                    </tr>

                    @foreach($ventas as $venta)
                    <tr>
                        <td>
                            <!--Nos dirigira al metodo show del controlador -->
                            <a href="/venta/{{ $venta->id }}">   
                            {{ $venta->id }}
                            </a>

                        </td>
                        <!--LLAVES FORANEAS -->
                        <td>{{ $venta->empleado->nombre }}</td>
                        <td>{{ $venta->empleado->apellidos }}</td>
                        <!--FIN LLAVES FORANEAS -->
                        

                        <!--RELACIÓN MUCHOS A MUCHOS -->
                        <td>
                        @foreach($venta->sneakers as $sneaker)
                            {{ $sneaker->nombre }}</br>
                        @endforeach
                        </td>
                         <!--FIN RELACIÓN MUCHOS A MUCHOS -->
                        
                        <td>{{ $venta->fecha_venta }}</td>
                        <td>{{ $venta->forma_pago }}</td>
                    
                        <td>
                            <!--Nos dirigira al metodo edit del controlador -->
                            <a class="btn btn-warning" href="/venta/{{ $venta->id }}/edit">   
                            Editar
                            </a>

                        </td>

                        <td> 
                            <!--action lo manda al método DELETE-->
                            <form method="POST" action="/venta/{{ $venta->id }}">

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