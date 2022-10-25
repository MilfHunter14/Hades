<!DOCTYPE html>
<x-head titulo="Mostrar Venta">

    <x-navbar></x-navbar>
    <section class="h-100 bg-white">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
            <a class="btn btn-dark" style="background-color:black" href="/venta">← Listado de Ventas</a>
                <div class="separar">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                    <img src="/img/mostrarVenta.jpg"
                        alt="Sample photo" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-xl-6">
                
                        <h3 class="mb-5 text-uppercase">Detalles de la Venta</h3>

                        <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m">ID Venta</label>
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" value="{{ $venta->id }}" disabled />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n">Nombre del Vendedor</label>
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" value="{{ $venta->empleado->nombre }}"disabled />   
                        </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m1">Modelo Vendido</label>
                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" value="{{ $venta->sneaker->nombre }}" disabled />
                        </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n1">Fecha de la Venta</label>
                            <input type="text" id="form3Example1n1" class="form-control form-control-lg" value="{{ $venta->fecha_venta }}" disabled />
                            </div>
                        </div>
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example8">Forma de Pago</label>
                        <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{ $venta->forma_pago }}" disabled />
                        </div>
                        
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