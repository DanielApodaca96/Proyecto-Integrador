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

Route::get('/login', function() {
    return view('login.index');
});

Route::get('/panel-de-administracion', function() {
    return view('admin.index');
});


Route::get('/panel-de-administracion/grupos', function() {
    return view('admin.grupos');
});

Route::get('/panel-de-administracion/talleres', function() {
    return view('admin.talleres');
});
Route::get('/panel-de-administracion/metas', function() {
    return view('admin.metas');
});
Route::get('/panel-de-administracion/preguntas', function() {
    return view('admin.preguntas');
});
Route::get('/panel-de-administracion/usuarios', function() {
    return view('admin.usuarios');
});
Route::get('/panel-de-administracion/alumnos', function() {
    return view('admin.alumnos');
});
Route::group(['prefix'=>'administracion','as'=>'admin.'], function(){
  Route::get('/','AdminController@index');
  Route::resource('admin','AdminController');

  Route::get('/alumnos','AlumnosController@alumnos');
  Route::resource('admin.alumnos','AlumnosController');

  Route::get('/grupos','GruposController@grupos');
  Route::resource('admin.grupos','GruposController');

  Route::get('/metas','MetasController@metas');
  Route::resource('admin.metas','MetasController');

  Route::get('/preguntas','PreguntasController@preguntas');
  Route::resource('admin.preguntas','PreguntasController');

  Route::get('/talleres','TalleresController@talleres');
  Route::resource('admin.talleres','TalleresController');

  Route::get('/usuarios','UsuariosController@usuarios');
  Route::resource('admin.usuarios','UsuariosController');
});
