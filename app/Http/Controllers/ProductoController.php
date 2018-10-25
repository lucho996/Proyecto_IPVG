<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Clientes;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $producto = Producto::orderBy('ID_PRODUCTO','ASC')->get();
        return view('producto.index')->with('producto',$producto);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('producto.create')->with('clientes',$clientes);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->RUT_CLIENTE =$request->Input('cliente');
        $producto->DESCRIPCION =$request->Input('descripcion');
        $producto->COD_PETICION_OFERTA =$request->Input('codigo_pet_oferta');
        $producto->TIPO_PRODUCTO =$request->Input('tipo');
        $producto->PLANO_PRODUCTO =$request->Input('plano');
        $producto->FECHA_LLEGADA = Carbon::now();
        $producto->FECHA_RESPUESTA_COTIZACION =$request->Input('fecha_resp_coti');
        $producto->FECHA_DE_ENTREGA_PRODUCTO =$request->Input('fecha_entrega');
        $producto->ESTADO = "Falta Cotización";
        try{
        if($producto->save()){
            Session::flash('message','Guardado Correctamente');
            Session::flash('class','success');
        }else{
            Session::flash('message','Ha ocurrido un error');
            Session::flash('class','danger');
        }
        }catch(\Exception $e) {
        Session::flash($e);
        Session::flash('class','danger');
        }
        return redirect()->route('producto.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Clientes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
