<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});
//Route::resource('users','UsersController');

/*Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as'   => 'users.destroy'
	]);*/
Route::resource('articulos','ArticulosController');
Route::resource('consultoria','ConsultoriaController');
Route::resource('detalles','DetallesController');
Route::resource('informe','InformeController');
Route::resource('investigador','InvestigadorController');
Route::resource('proyecto','ProyectoController');
Route::resource('software','SoftwareController');
Route::resource('calidad_revista','CalidadRevistaController');
Route::resource('carga_horaria','CargaHorariaController');
Route::resource('categoria_colciencias','CategoriaColcienciaController');
Route::resource('categoria_profesor','CategoriaProfesorController');
Route::resource('cuartil','CuartilController');
Route::resource('dependencias','DependenciaController');
Route::resource('programas','ProgramaController');
Route::resource('revistas','RevistaController');
Route::resource('tipologia_producto','TipologiaProductoController');

//Route::resource('usuarios','UsuariosController');



