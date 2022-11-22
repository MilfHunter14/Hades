<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SneakerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sneakers = Sneaker::all();
        return view('sneakers.sneakersIndex', compact('sneakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sneakers.sneakersCreate');
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
            'nombre' => 'required | max:255',
            'marca' => 'required | max:255',
            'precio' => 'integer | min:1000' ,
            'talla' => 'required',
            'stock' => 'integer | min:0',
        ]);

        $sneaker = Sneaker::create($request->all());
        /* Sneaker::create($request->all()); */

        // Imágenes //
        //Verifica si el archivo es válido
        if ($request->file('imagen')->isValid())
        {
            //Nos devolverá el path de la ubicación del archivo
            $ubicacion = $request->imagen->store('public');
            //Crea una instancia
            $imagen = new Archivo();
            //Se le asigna la ubicación
            $imagen->ubicacion = $ubicacion;
            //Se le asigna el nombre original
            $imagen->nombre_original = $request->imagen->getClientOriginalName();

            //Se guarda la instancia
            $sneaker->archivos()->save($imagen);
        }


        return redirect('/sneaker');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function show(Sneaker $sneaker)
    {
        return view('sneakers.sneakersShow', compact('sneaker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Sneaker $sneaker)
    {
        return view('sneakers.sneakersEdit', compact('sneaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sneaker $sneaker)
    {
        $request->validate([
            'nombre' => 'required | max:255',
            'marca' => 'required | max:255',
            'precio' => 'integer | min:1000' ,
            'talla' => 'required | max:255',
            'stock' => 'integer | min:0',
        ]);
        
        // Imágenes //
        //Verifica si el archivo es válido
        if ($request->file('imagen')->isValid())
            {
                //Nos devolverá el path de la ubicación del archivo
                $ubicacion = $request->imagen->store('public');
                //Crea una instancia
                $archivo = new Archivo();
                //Se le asigna la ubicación
                $archivo->ubicacion = $ubicacion;
                //Se le asigna el nombre original
                $archivo->nombre_original = $request->imagen->getClientOriginalName();

                //Se guarda la instancia
                $archivo->update(['imagen' => $sneaker->archivos()]);
            }
        Sneaker::where('id', $sneaker->id)->update($request->except('_token', '_method'));

        return redirect('/sneaker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sneaker $sneaker)
    {
        
        $status='';
        $count=0;

        // Contamos los registros en las relaciones
        $count+=count($sneaker->ventas);
        // Comprobamos si existen registros 
        if($count>0) {
            $status =  'No puedes eliminar este sneaker porque esta ligado a una venta, verifica el listado de ventas.';
            
        } else {
            /* Quitamos la relación que existe entre la tabla Sneaker y el id de archivos
            Para que a nivel de base de datos no nos arroje error de llave violada */
            $sneaker->archivos()->detach();
            // si no hay registros eliminamos
            $sneaker->delete();
            $status = "Sneaker eliminado correctamente";
        }
        //dd($status);
        return redirect('/sneaker')->with('status', $status);
    }
}


