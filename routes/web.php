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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/equipments', 'EquipmentsController@index');

Route::get('/equipment/{id}', 'EquipmentsController@show');

Route::post('/equipment/post', 'EquipmentsController@store');

Route::put('/equipment/{id}/update', 'EquipmentsController@update');
Route::get('/equipment/{id?}/edit', 'EquipmentsController@edit');


Route::delete('/equipment/{id?}', 'EquipmentsController@destroy');



Route::get('/categories', 'CategoriesController@index');
