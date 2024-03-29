<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revista;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revistas = Revista::orderBy('revi_id', 'ASC')->get();
        return view("admin.configuracion.revistas.index")->with('revistas',$revistas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.revistas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $revista = new Revista($request->all());
        $revista->save();
        return redirect()->route('revistas.index');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revista = Revista::find($id);
        return view('admin.configuracion.revistas.edit')->with('revista', $revista);
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
        $revista = Revista::find($id);
        $revista->revi_codigo = $request->revi_codigo;
        $revista->revi_descripcion = $request->revi_descripcion;
        $revista->revi_estado = $request->revi_estado;
        $revista->save();
        return redirect()->route('revistas.index');
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
