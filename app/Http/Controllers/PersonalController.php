<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $personal = Personal::orderBy('RUTP','DESC')->get();
        return view('personal.index')->with('personal',$personal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Personal;
        $persona->RUTP = Input::get('rut');
        $persona->NOMBREP = Input::get('nombre');
        $persona->APELLIDOP = Input::get('apellido');
        $persona->TELEFONOP = Input::get('telefono');
        $persona->CORREOP = Input::get('correo');
        $persona->HORAHOMBRE = Input::get('hh');
        $persona->FECHANACIMIENTO = Input::get('fecha_nac');
        $persona->DIRECCION = Input::get('direccion');
       // $persona->TIPO = Select::get('tipo');
        if($persona->save()){
            Session::flash('message', 'Guardado Con Exito');
            Session::flash('class', 'success');
        }else{
            Session::flash('message', 'Ocurrio Un Error');
            Session::flash('class', 'danger');
        }
        return Redirect::to('personal/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $RUTP
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $persona = Personal::find('RUTP');
		return View('personal.show')->with('personal',$persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
