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

  Route::get('/usuarios','UsuariosController@index');
  Route::resource('usuarios','UsuariosController');
});

Auth::routes();

Route::get('/home', 'HomeController@usuarios')->name('home');
