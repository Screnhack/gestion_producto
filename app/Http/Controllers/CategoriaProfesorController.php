<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProfesor;

class CategoriaProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaProfesor = CategoriaProfesor::orderBy('capr_id', 'ASC')->get();
        return view("admin.configuracion.categoria_profesor.index")
        ->with('categoriaProfesor',$categoriaProfesor);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.categoria_profesor.create");
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoriaProfesor = new CategoriaProfesor($request->all());
        $categoriaProfesor->save();
        return redirect()->route('categoria_profesor.index');
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
        $categoriaProfesor = CategoriaProfesor::find($id);
        return view('admin.configuracion.categoria_profesor.create')->with('categoriaProfesor', $categoriaProfesor);
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
        $categoriaProfesor = CategoriaProfesor::find($id);
        $categoriaProfesor->save();
        return redirect()->route('categoria_profesor.index');
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
