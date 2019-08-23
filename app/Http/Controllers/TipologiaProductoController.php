<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipologiaProducto;

class TipologiaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipologia_producto = TipologiaProducto::orderBy('tipr_id', 'ASC')->get();
        return view("admin.configuracion.tipologia_producto.index")->with('tipologia_producto',$tipologia_producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.tipologia_producto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Revista = new TipologiaProducto($request->all());
        $Revista->save();
        return redirect()->route('tipologia_producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipologia_producto = TipologiaProducto::find($id);
        return view('admin.configuracion.tipologia_producto.edit')->with('tipologia_producto', $tipologia_producto);
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
        $tipologia_producto = TipologiaProducto::find($id);
        $tipologia_producto->tipr_codigo = $request->tipr_codigo;
        $tipologia_producto->tipr_descripcion = $request->tipr_descripcion;
        $tipologia_producto->tipr_estado = $request->tipr_estado;
        $tipologia_producto->save();
        return redirect()->route('tipologia_producto.index');
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
