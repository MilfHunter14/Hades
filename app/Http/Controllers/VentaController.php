<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Empleado;
use App\Models\Sneaker;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtenemos las variables de los modelos que estan en venta y los mandamos a la vista*/
        $ventas = Venta::all();
        return view('ventas/ventasIndex', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Obtenemos la información de los modelos para poderlos presentar en Create
        $empleados = Empleado::all();
        $sneakers = Sneaker::all();
        return view('ventas/ventasCreate', compact('empleados', 'sneakers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empleado_id' => 'required', 
            'fecha_venta' =>'required|date',
            'forma_pago' => 'required|max:255',
        ]);

        /* $request->merge(['empleado_id', 'sneaker_id']); */

        $venta = Venta::create($request->all());

        //$venta se ira a la funcion de sneakers(muchos a muchos)
        //El attach() permite recibir un solo id o un arreglo  de id
        $venta->sneakers()->attach($request->sneakers_id);

        return redirect('/venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        
        //Obtenemos la información de los modelos para poderlos presentar en Create
        $empleados = Empleado::all();
        $sneakers = Sneaker::all();
        return view('ventas/ventasShow', compact('venta','empleados','sneakers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
    
        $empleados = Empleado::all();
        $sneakers = Sneaker::all();
        return view('ventas/ventasEdit', compact('venta', 'empleados', 'sneakers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'empleado_id' => 'required',
            'sneaker_id' => 'required',
            'fecha_venta' =>'required|date',
            'forma_pago' => 'required|max:255',
        ]);

         //Añadimos las llaves foraneas
         //$request->merge(['empleado_id', 'sneaker_id']);


        //La información viene de empleadosEdit.blade.php y se guarda
        Venta::where('id', $venta->id)->update($request->except('_token', '_method'));

        return redirect('/venta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //La información viene de index y se elimina
        $venta->delete();
        return redirect('/venta');
    }
}
