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
    return view('auth/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'AdminController@usuarios')->name('usuarios');

Route::resource('usuarios', 'AdminController', [
    'only' => ['usuarios', 'store', 'update', 'destroy'],
]);

Route::get('/empresa', 'ClienteController@empresa')->name('empresa');
Route::get('/dataCredito', 'ClienteController@dataCredito')->name('dataCredito');
Route::get('/Listar', 'ClienteController@listar')->name('listar');

Route::post('/crearEmpresa', 'ClienteController@crearEmpresa')->name('crearEmpresa');
Route::post('/crearCredito', 'ClienteController@crearCredito')->name('crearCredito');



