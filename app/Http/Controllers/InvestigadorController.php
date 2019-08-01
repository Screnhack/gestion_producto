<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view("admin.investigador.create");
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
        //$investigador = new Investigador($request->all());
        //$investigador->save();
        //flash('La investigador ' . $investigador->nombre . ' fue guardada de manera exitosa')->success();
        //return redirect()->route('admin.investigadors.index');
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
