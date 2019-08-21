<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CargaHoraria;

class CargaHorariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cargaHoraria = CargaHoraria::orderBy('caho_id', 'ASC')->get();
        return view("admin.configuracion.carga_horaria.index")
        ->with('cargaHoraria',$cargaHoraria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.configuracion.carga_horaria.create");
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargaHoraria = new CargaHoraria($request->all());
        $cargaHoraria->save();
        return redirect()->route('carga_horaria.index');
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
        $carga_horaria = CargaHoraria::where('caho_id',$id)->first();
        return view('admin.configuracion.carga_horaria.edit')->with('carga_horaria', $carga_horaria);
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
        $carga_horaria = CargaHoraria::where('caho_id',$id)->first();
        $carga_horaria->save();
        return redirect()->route('carga_horaria.index');
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
