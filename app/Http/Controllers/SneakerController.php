<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use Illuminate\Http\Request;


class SneakerController extends Controller
{
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

        Sneaker::create($request->all());

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
            // si no hay registros eliminamos
            $sneaker->delete();
            $status = "Sneaker eliminado correctamente";
        }
        //dd($status);
        return redirect('/sneaker')->with('status', $status);
    }
}
