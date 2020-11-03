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

// Route::get('/', function () {
//     return view('welcome');
// });



//rutas sitio
Route::get('/','siteController@index');
Route::get('/contacto','siteController@contacto');
Route::get('/nosotros','siteController@nosotros');
Route::get('/catalogo/aseo','siteController@catalogoAseo');
Route::get('/catalogo/papeleria','siteController@catalogoPapeleria');
Route::get('/catalogo/salud','siteController@catalogoSalud');
Route::post('/contacto/email','siteController@enviarEmail');



Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin','siteController@admin');

    //rutas admin empresa
    Route::get('/admin/empresa','EmpresaController@index');
    Route::post('/admin/empresa/guardar','EmpresaController@store');

    //rutas categorias
    Route::get('/admin/categorias','CategoriasController@index');
    Route::get('/admin/categorias/nueva','CategoriasController@create');
    Route::post('/admin/categorias/guardar','CategoriasController@store');
    Route::get('/admin/categorias/editar/{id}','CategoriasController@edit');
    Route::post('/admin/categorias/actualizar','CategoriasController@update');
    Route::get('/admin/categorias/activacion/{id}','CategoriasController@activacion');

    //rutas productos
    Route::get('/admin/productos','ProductosController@index');
    Route::get('/admin/productos/nuevo','ProductosController@create');
    Route::post('/admin/productos/guardar','ProductosController@store');
    Route::get('/admin/productos/ver/{id}','ProductosController@show');
    Route::get('/admin/productos/editar/{id}','ProductosController@edit');
    Route::post('/admin/productos/actualizar','ProductosController@update');
    Route::get('/admin/productos/activacion/{id}','ProductosController@activacion');

    //rutas usuarios
    Route::get('/admin/usuarios','UsuariosController@index');
    Route::get('/admin/usuarios/nuevo','UsuariosController@create');
    Route::post('/admin/usuarios/guardar','UsuariosController@store');
    Route::get('/admin/usuarios/editar/{id}','UsuariosController@edit');
    Route::post('/admin/usuarios/actualizar','UsuariosController@update');
    Route::get('/admin/usuarios/activacion/{id}','UsuariosController@activacion');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
