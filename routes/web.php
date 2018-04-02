<?php


use Illuminate\Http\Request;
use App\Toner;
use App\Cartridge;
use App\Management;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/maintenance/home', 'HomeController@index')->name('home');

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

  Route::get('/report/equipments/{begin}/{end}', function($begin, $end) {
    $issues = \App\Maintenance::where('created_at', '>=', $begin)
      ->where('created_at', '<=', $end)->get();

    return view('report')->with('issues', $issues);
  });
});



Route::get('/cartridge/{id}', function ($id) {
   $infos = Management::where('cartridge_id',$id)->get();

   $cartridge_model = Cartridge::find($id)->model;
   $cartridge = $cartridge_model . ' : ' . Cartridge::find($id)->barcode;

    return View::make('infos')->with(['infos' => $infos, 'cartridge' => $cartridge,
    'cartridge_id' => $id]);
})->middleware('auth');
Route::get('/toners', function () {

  if(Auth::check()) {
    $toners = Toner::all();

    return View::make('toners')->with('toners',$toners);
  } else {
    dd("Please log in");
  }
})->middleware('auth');

Route::get('/cartridges', function () {
  if(Auth::check()) {
    $cartridges = Cartridge::orderBy('barcode', 'asc')->get();

    return View::make('cartridges')->with('cartridges',$cartridges);
  } else {
    dd("Please log in");
  }
})->middleware('auth');


Route::get('/toners/{toner_id?}',function($toner_id = NULL){
    $toner = Toner::find($toner_id);

    return Response::json($toner);
})->middleware('auth');

Route::get('/cartridges/{cartridge_id?}',function($cartridge_id = NULL){
    $cartridge = Cartridge::find($cartridge_id);

    return Response::json($cartridge);
})->middleware('auth');

Route::get('/infos/{info_id?}',function($info_id = NULL){
    $info = Management::find($info_id);
    if($info == NULL ){
       $infos = Management::all();
       return Response::json($infos);
     }

    return Response::json($info);
})->middleware('auth');


Route::post('/toners',function(Request $request){
    $toner = Toner::create($request->all());
    $toner->created_at = Carbon\Carbon::now()->toDateTimeString();
    return Response::json($toner);
})->middleware('auth');
Route::post('/cartridges',function(Request $request){
    $cartridge = Cartridge::create($request->all());
    $cartridge->created_at = Carbon\Carbon::now()->toDateTimeString();
    return Response::json($cartridge);
})->middleware('auth');

Route::post('/infos',function(Request $request){
    $info = Management::create($request->all());

    $toner = Toner::find($info->toner_id);

    if($request->toner_quantity > $toner->quantity_remained) {
      dd("Error: Max quantitiy" . $toner->quantity_remained);
    }

    $info->old_toner_quantity = $info->toner_quantity;
    $info->created_at = Carbon\Carbon::now()->toDateTimeString();

    $toner->quantity_remained -= $info->toner_quantity;
    if($toner->quantity_remained == 0) {
      $toner->is_active = 0;
    }
    $toner->save();

    return Response::json($info);
})->middleware('auth');


Route::put('/toners/{toner_id?}',function(Request $request,$toner_id){
    $toner = Toner::find($toner_id);

    $toner->model = $request->model;
    $toner->quantity_remained += $request->quantity - $toner->quantity;
    $toner->quantity = $request->quantity;
    $toner->procure_date = $request->procure_date;
    $toner->price = $request->price;
    $toner->company = $request->company;
    $toner->is_active = $request->is_active;
    $toner->save();

    return Response::json($toner);
})->middleware('auth');
Route::put('/cartridges/{cartridge_id?}',function(Request $request,$cartridge_id){
    $cartridge = Cartridge::find($cartridge_id);

    $cartridge->barcode = $request->barcode;
    $cartridge->model = $request->model;
    $cartridge->type = $request->type;
    $cartridge->reg_state = $request->reg_state;
    $cartridge->office = $request->office;

    $cartridge->save();

    return Response::json($cartridge);
})->middleware('auth');
Route::put('/infos/{info_id?}',function(Request $request, $info_id){

    $info = Management::find($info_id);
    $toner = Toner::find($info->toner_id);
    $toner->quantity_remained += $info->old_toner_quantity - $request->toner_quantity;

    $info->toner_id = $request->toner_id;
    $info->toner_quantity = $request->toner_quantity;
    $info->opc = $request->opc;
    $info->pcr = $request->pcr;
    $info->magnetic_wave = $request->magnetic_wave;
    $info->cleaning_blade = $request->cleaning_blade;
    $info->dr_cleaning_blade = $request->dr_cleaning_blade;
    $info->chip = $request->chip;
    $info->description = $request->description;
    $info->user_id = $request->user_id;
    $info->cleaned = $request->cleaned;
    $info->old_toner_quantity = $info->toner_quantity;
    $toner->save();
    $info->save();

    return Response::json($info);
})->middleware('auth');


Route::delete('/toners/{toner_id?}',function($toner_id){
    $toner = Toner::destroy($toner_id);

    return Response::json($toner);
})->middleware('auth');
Route::delete('/cartridges/{cartridge_id?}',function($cartridge_id){
    $cartridge = Cartridge::destroy($cartridge_id);

    return Response::json($cartridge);
})->middleware('auth');
Route::delete('/infos/{info_id?}',function($info_id){
  $info = Management::find($info_id);
  $toner = Toner::find($info->toner_id);
  $toner->quantity_remained += $info->toner_quantity;

  $info = Management::destroy($info_id);
  $toner->save();

  return Response::json($info);
})->middleware('auth');

Auth::routes();

Route::get('/cart/home', 'HomeController@cartridgesHome')->name('cartridgesHome');

Route::get('/report/cartridges/{begin}/{end}', function($begin, $end) {

  $infos = \App\Management::where('created_at', '>=', $begin . ' 00:00:00')
  ->where('created_at', '<=', $end . ' 23:59:59')->get();

  return view('report')->with(['infos' => $infos, 'begin' => $begin, 'end' => $end]);
});
