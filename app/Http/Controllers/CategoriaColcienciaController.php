<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaColciencia;

class CategoriaColcienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaColciencias = CategoriaColciencia::orderBy('caco_id', 'ASC')->get();
        return view("admin.configuracion.categoria_colciencias.index")
        ->with('categoriaColciencias',$categoriaColciencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.categoria_colciencias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoriaColciencias = new CategoriaColciencia($request->all());
        $categoriaColciencias->save();
        return redirect()->route('categoria_colciencias.index');
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
        $categoria_colciencia = CategoriaColciencia::find($id);
        return view('admin.configuracion.categoria_colciencias.edit')->with('categoria_colciencia', $categoria_colciencia);
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
        $categoria_colciencia = CategoriaColciencia::find($id);
        $categoria_colciencia->caco_codigo = $request->caco_codigo;
        $categoria_colciencia->caco_descripcion = $request->caco_descripcion;
        $categoria_colciencia->caco_estado = $request->caco_estado;
        $categoria_colciencia->save();
        return redirect()->route('categoria_colciencias.index');
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
