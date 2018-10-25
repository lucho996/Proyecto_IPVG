<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;
use Session;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario = Inventario::orderBy('NOMBRE','DESC')->get();
        return view('inventario.index')->with('inventario',$inventario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario = new Inventario;
        $inventario->NOMBRE =$request->Input('nombre');
        $inventario->MARCA =$request->Input('marca');
        $inventario->UBICACION =$request->Input('ubicacion');
        $inventario->VALOR =$request->Input('valor');
        $inventario->ESTADO =$request->Input('estado');
        try{
            if($inventario->save()){
                Session::flash('message','Guardado Correctamente');
                Session::flash('class','success');
            }else{
                Session::flash('message','Ha ocurrido un error');
                Session::flash('class','danger');
            }
            }catch(\Exception $e) {
            Session::flash('message','Error al ingresar un producto.');
            Session::flash('class','danger');
            }
            return redirect()->route('inventario.create');       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        //
    }
}
