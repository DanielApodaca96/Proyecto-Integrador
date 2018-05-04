
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

Route::group(['prefix'=>'administracion','as'=>'admin.'], function(){
  Route::get('/','AdminController@index');
  Route::resource('admin','AdminController');

  Route::get('/alumnos','AlumnosController@index');
  Route::resource('alumnos','AlumnosController');

  Route::get('/inscripcion','InscripcionController@index');
  Route::resource('inscripcion','InscripcionController');

  Route::get('/pre_evaluacion','Pre_evaluacionController@index');
  Route::resource('pre_evaluacion','Pre_evaluacionController');

  Route::get('/post_evaluacion','Post_evaluacionController@index');
  Route::resource('post_evaluacion','Post_evaluacionController');

  Route::get('/grupos','GruposController@index');
  Route::resource('grupos','GruposController');

  Route::get('/resultados','ResultadosController@index');
  Route::resource('resultados','ResultadosController');

  Route::get('/metas','MetasController@index');
  Route::resource('metas','MetasController');

  Route::get('/preguntas','PreguntasController@index');
  Route::resource('preguntas','PreguntasController');

  Route::get('/talleres','TalleresController@index');
  Route::resource('talleres','TalleresController');

  Route::get('/usuarios','UsuariosController@index');
  Route::resource('usuarios','UsuariosController');

  Route::get('/categorias','CategoriasController@index');
  Route::resource('categorias','CategoriasController');

  Route::get('/stats','StatsController@index');
  Route::resource('stats','StatsController');

  Route::get('/reportes','ReportesController@index');
  Route::resource('reportes','ReportesController');

  Route::post('/alumnos/ajax','AlumnosController@ajax');

  Route::post('/alumnos/buscar', 'AlumnosController@buscar');
  Route::post('/grupos/buscar', 'GruposController@buscar');
});

Auth::routes();

Route::get('/home', 'HomeController@usuarios')->name('home');
