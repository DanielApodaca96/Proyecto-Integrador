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

  Route::get('/grupos','GruposController@index');
  Route::resource('grupos','GruposController');

  Route::get('/metas','MetasController@index');
  Route::resource('metas','MetasController');

  Route::get('/preguntas','PreguntasController@index');
  Route::resource('preguntas','PreguntasController');

  Route::get('/talleres','TalleresController@index');
  Route::resource('talleres','TalleresController');

  Route::get('/usuarios','UsuariosController@index');
  Route::resource('usuarios','UsuariosController');
});

Auth::routes();

Route::get('/home', 'HomeController@usuarios')->name('home');
