<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalidadRevista;

class CalidadRevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calidadRevista = CalidadRevista::orderBy('care_id', 'ASC')->get();        
        return view("admin.configuracion.calidad_revista.index")
        ->with('calidadRevista',$calidadRevista);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.calidad_revista.create");
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $calidad_revista = new CalidadRevista($request->all());
        $calidad_revista->save();
        return redirect()->route('calidad_revista.index');
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
        $calidad_revista = CalidadRevista::find($id);
        return view('admin.configuracion.calidad_revista.edit')->with('calidad_revista', $calidad_revista);
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
        $calidad_revista = CalidadRevista::find($id);
        $calidad_revista->care_codigo = $request->care_codigo;
        $calidad_revista->care_descripcion = $request->care_descripcion;
        $calidad_revista->care_estado = $request->care_estado;
        $calidad_revista->save();
        return redirect()->route('calidad_revista.index');
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
