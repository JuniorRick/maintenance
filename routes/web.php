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

Route::group(['middleware' => ['auth']], function()
{
  Route::get('/equipments', 'EquipmentsController@index');
  Route::get('/equipment/{id}', 'EquipmentsController@show');
  Route::post('/equipment/post', 'EquipmentsController@store');
  Route::put('/equipment/{id}/update', 'EquipmentsController@update');
  Route::delete('/equipment/{id}', 'EquipmentsController@destroy');



  Route::get('/groups', 'GroupsController@index');

  Route::get('/groups/category/{id}', 'GroupsController@showCategory');
  Route::get('/groups/section/{id}', 'GroupsController@showSection');

  Route::post('/groups/category/post', 'GroupsController@storeCategory');
  Route::post('/groups/section/post', 'GroupsController@storeSection');

  Route::put('/groups/category/{id}/update', 'GroupsController@updateCategory');
  Route::put('/groups/section/{id}/update', 'GroupsController@updateSection');

  Route::delete('/groups/category/{id}', 'GroupsController@destroyCategory');
  Route::delete('/groups/section/{id}', 'GroupsController@destroySection');


  Route::get('issues', 'MaintenancesController@index');
  Route::get('/issue/{id}', 'MaintenancesController@show');
  Route::get('/issue/{id}/info', 'MaintenancesController@info');
  Route::post('/issue/post', 'MaintenancesController@store');
  Route::put('/issue/{id}/update', 'MaintenancesController@update');
  Route::delete('/issue/{id}', 'MaintenancesController@destroy');

  Route::post('/upload/{id}', 'UploadsController@upload');
  Route::get('/delete/{id}/{filename}', 'UploadsController@deleteFile');

  Route::get('/issue/{id}/files', 'UploadsController@getFilesByIssue');

  Route::get('/report/{begin}/{end}', function($begin, $end) {
    $issues = \App\Maintenance::where('created_at', '>=', $begin)
    ->where('created_at', '<=', $end)->get();

    return view('report')->with('issues', $issues);
  });
});
