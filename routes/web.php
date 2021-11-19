<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/comida', 'FoodController@comida');

Route::get('/servicios', 'ServicesController@servicios');

Route::get('/recomendaciones_y_compromisos', function () {
    return view('recomendaciones_y_compromisos');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/acerca_de', function () {
    return view('acerca_de');
});

Route::get('/reservar', 'ReservationController@reservacion');

Route::get('/contacto', 'ContactController@contacto');

Route::post('/contacto','ContactController@enviar')->name('contacto.submit');

Route::get('/agregar-comida','FoodController@agregarComida');

Route::post('/agregar-comida','FoodController@guardarComida')->name('comida.submit');

Route::get('/preview-comida','FoodController@previewComida');

Route::get('/agregar-servicio','ServicesController@agregarServicio');

Route::post('agregar-servicio','ServicesController@guardarServicio')->name('servicio.submit');

Route::get('/preview-servicios','ServicesController@previewServicios');

Route::get('/actualizar-comida/{id}','FoodController@editar');

Route::get('/eliminar-comida/{id}','FoodController@eliminar');

Route::get('/actualizar-servicio/{id}', 'ServicesController@editar');

Route::get('/eliminar-servicio/{id}', 'ServicesController@eliminar');