<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se obtiene la informacion y se le asigna a la variable
        $empleados = Empleado::all();
        return view('empleados/empleadosIndex', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados/empleadosCreate');
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
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'genero' => 'required|max:1|min:1',
            'telefono' => 'required|max:10|min:10',
            'calle' => 'required|max:255',
            'colonia' => 'required|max:255',
            'municipio' => 'required|max:255',
            'fecha_nac' =>'required|date',
            'estado_civil' => 'required|max:255',

        ]);
   
        Empleado::create($request->all());

        //Te redirecciona al index por método get
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //Recibe el id como instancia 

        return view('empleados/empleadosShow', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados/empleadosEdit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'genero' => 'required|max:1|min:1',
            'telefono' => 'required|max:10|min:10',
            'calle' => 'required|max:255',
            'colonia' => 'required|max:255',
            'municipio' => 'required|max:255',
            'fecha_nac' =>'required|date',
            'estado_civil' => 'required|max:255',

        ]);

        //La información viene de empleadosEdit.blade.php y se guarda
        Empleado::where('id', $empleado->id)->update($request->except('_token', '_method'));

        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $status='';
        $count=0;

        // Contamos los registros en las relaciones
        $count+=count($empleado->ventas);
        // Comprobamos si existen registros 
        if($count>0) {
            $status =  'No puedes eliminar este empleado porque esta ligado a una venta, verifica el listado de ventas.';
            
        } else {
            // si no hay registros eliminamos
            $empleado->delete();
            $status = "Empleado eliminado correctamente";
        }
        //dd($status);
        return redirect('/empleado')->with('status', $status);
    }
}
