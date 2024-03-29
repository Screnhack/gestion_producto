<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuartil;

class CuartilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuartil = Cuartil::orderBy('cuar_id', 'ASC')->get();
        return view("admin.configuracion.cuartil.index")
        ->with('cuartil',$cuartil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.cuartil.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuartil = new Cuartil($request->all());
        $cuartil->save();
        return redirect()->route('cuartil.index');
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
        $cuartil = Cuartil::find($id);
        return view('admin.configuracion.cuartil.edit')->with('cuartil', $cuartil);
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
        $cuartil = Cuartil::find($id);
        $cuartil->cuar_codigo = $request->cuar_codigo;
        $cuartil->cuar_descripcion = $request->cuar_descripcion;
        $cuartil->cuar_estado = $request->cuar_estado;
        $cuartil->save();
        return redirect()->route('cuartil.index');
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
