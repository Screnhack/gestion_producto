<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulo;
use App\Detalle;
use App\Investigador;
use App\User;

class InvestigadorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.investigador.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargas_horarias = DB::table('carga_horaria')->get();
        $categorias_colciencias = DB::table('categoria_colciencias')->get();
        $programas = DB::table('programas')->get();
        $dependencias = DB::table('dependencias')->get();
        $categorias_profesores = DB::table('categoria_profesor')->get();
        $grupos_investigacion = DB::table('grupo_investigacion')->get();
        return view("admin.investigador.create")
        ->with('cargas_horarias',$cargas_horarias)
        ->with('categorias_colciencias',$categorias_colciencias)
        ->with('programas',$programas)
        ->with('dependencias',$dependencias)
        ->with('categorias_profesores',$categorias_profesores)
        ->with('grupos_investigacion',$grupos_investigacion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $investigador = new Investigador($request->all());
        $investigador->save();
        return redirect()->route('admin.investigador.index');
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
        //
        $investigador = Investigador::find($id);
        return view('admin.investigador.edit')->with('investigador', $categoria);
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
        $investigador = Investigador::find($id);
        $investigador->nombre = $request->nombre;
        $investigador->descripcion = $request->descripcion;
        $investigador->save();
        flash('la investigador ' . $investigador->nombre . ' fue modificada exitosamente')->warning();
        return redirect()->route('admin.investigador.index');
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
        $investigador = Investigador::find($id);
        $investigador->delete();
        flash('la investigador ' . $investigador->nombre . ' fue eliminada de manera exitosa')->error();
        return redirect()->route('admin.investigador.index');
    }
}
