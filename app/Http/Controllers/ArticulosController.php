<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;
use App\Detalle;
use App\Investigador;
use App\User;
use App\Cuartil;
use App\TipologiaProducto;
use App\CalidadRevista;
use App\Revista;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("admin.articulos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $calidadRevistas = CalidadRevista::orderBy('care_id', 'ASC')->get();
        $revistas = Revista::orderBy('revi_id', 'ASC')->get();
        $cuartiles = Cuartil::orderBy('cuar_id', 'ASC')->get();
        $tipologias_productos = TipologiaProducto::orderBy('tipr_id', 'ASC')->get();
        return view("admin.articulos.create")
        ->with('calidadRevistas',$calidadRevistas)
        ->with('revistas',$revistas)
        ->with('cuartiles',$cuartiles)
        ->with('tipologias_productos',$tipologias_productos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $articulo = new Articulo($request->all());
        $articulo->save();
        return redirect()->route('admin.articulos.index');
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
