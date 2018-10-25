<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Session;
use App\Clientes;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $personal = Personal::all();
        $clientes = Clientes::all();
        return view('personal.index')->with('personal',$personal)->with('clientes',$clientes);
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
        
        #dd($request->all());
        $personal = new Personal;
        $personal->RUTP =$request->Input('rut');
        $personal->NOMBREP =$request->Input('nombre');
        $personal->APELLIDOP =$request->Input('apellido');
        $personal->TELEFONOP =$request->Input('telefono');
        $personal->CORREOP =$request->Input('correo');
        $personal->HORAHOMBRE =$request->Input('hh');
        $personal->FECHANACIMIENTO =$request->Input('fecha_nac');
        $personal->DIRECCION =$request->Input('direccion');
        $personal->TIPO =$request->Input('tipo');
        try{
        if($personal->save()){
            Session::flash('message','Guardado Correctamente');
            Session::flash('class','success');
        }else{
            Session::flash('message','Ha ocurrido un error');
            Session::flash('class','danger');
        }
        }catch(\Exception $e) {
        Session::flash('message','El RUT ingresado ya se encuentra registrado.');
        Session::flash('class','danger');
        }
        return redirect()->route('personal.create');
       // $persona->TIPO = Select::get('tipo');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $RUTP
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        #$persona = Personal::find('RUTP');
		#return View('personal.show')->with('personal',$persona);
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
