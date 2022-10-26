<!DOCTYPE html>
<html lang="en">
<x-head titulo="Editar Venta">

<x-navbar></x-navbar>
        
        <section class="vh-100 bg-image" style="background-image: url('/img/createVenta.jpg')">
        
            <div class="separar">
                <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                    <div class="container h-100">
                    <a class="btn btn-dark" style="background-color:black" href="/venta">← Regresar</a>
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">    
                            <h2 class="text-uppercase text-center mb-5">Editar Venta</h2>

                            <form method="POST" action="/venta/{{ $venta->id}} ">
                            
                            @csrf
                            @method('PATCH')
                                <div class="form-outline mb-4">
                                <label class="form-label" for="empleado_id">Nombre: </label></br>
                                <select name="empleado_id" id="empleado_id" class="form-control form-control-lg" required>
                                    <option selected disabled>Seleccione una opción</option>
                                    @foreach($empleados as $empleado)
                                    <option value="{{ $empleado->id }}" {{ $venta->empleado->id == $empleado->id ? 'selected' : '' }}>{{$empleado->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('empleado_id')
                                    <i>{{ $message}}</i>
                                @enderror
                                </div>

                                <div class="form-outline mb-4">
                                <label class="form-label" for="sneaker_id">Modelo: </label></br>
                                <select name="sneaker_id" d="sneaker_id" class="form-control form-control-lg" required>
                                    <option selected disable>Seleccione una opción</option>
                                    @foreach($sneakers as $sneaker)
                                    <option value="{{ $sneaker->id }}" {{ $venta->sneaker->id == $sneaker->id ? 'selected' : ''}}>{{$sneaker->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('sneaker_id')
                                    <i>{{ $message}}</i>
                                @enderror
                                </div>

                                <div class="form-outline mb-4">
                                <label class="form-label" for="fecha_venta">Fecha de Venta: </label></br>
                                <input type="date" class="form-control form-control-lg"  name="fecha_venta" id="fecha_venta" autocomplete="off" required value="{{old('fecha_venta') ?? $venta->fecha_venta}}">
                                @error('fecha_venta')
                                    <i>{{ $message}}</i>
                                @enderror
                                </div>

                                <div class="form-outline mb-4">
                                <label class="form-label" for="forma_pago">Método de pago: </label><br/>
                                <select name="forma_pago" id="forma_pago" class="form-control form-control-lg" required>
                                    <option selected disabled>Seleccione una opción</option>
                                    <option value="{{old('forma_pago') ?? $venta->forma_pago}}" {{ $venta->forma_pago == $venta->forma_pago ? 'selected' : ''}}>{{$venta->forma_pago}}</option>
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Tarjeta">Tarjeta</option>
                                    <option value="Transferencia">Transferencia bancaria</option>
                                </select>
                                    @error('forma_pago')
                                    <i>{{ $message}}</i>
                                     @enderror
                                </div>

                                

                                <div class="d-flex justify-content-center">
                                <button type=submit
                                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Guardar</button>
                                </div>

                            </form>

                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

</x-head>
</html>