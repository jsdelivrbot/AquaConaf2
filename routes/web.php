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

Route::get('/home', 'GmapsController@index');
/*Route::get('/home', 'GmapsController@index');*/

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);

	
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//clase_incendio Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('clase_incendio','\App\Http\Controllers\Clase_incendioController');
  Route::post('clase_incendio/{id}/update','\App\Http\Controllers\Clase_incendioController@update');
  Route::get('clase_incendio/{id}/delete','\App\Http\Controllers\Clase_incendioController@destroy');
  Route::get('clase_incendio/{id}/deleteMsg','\App\Http\Controllers\Clase_incendioController@DeleteMsg');
});

//estado_alerta Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('estado_alerta','\App\Http\Controllers\Estado_alertaController');
  Route::post('estado_alerta/{id}/update','\App\Http\Controllers\Estado_alertaController@update');
  Route::get('estado_alerta/{id}/delete','\App\Http\Controllers\Estado_alertaController@destroy');
  Route::get('estado_alerta/{id}/deleteMsg','\App\Http\Controllers\Estado_alertaController@DeleteMsg');
});

//tipo_emergencia Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('tipo_emergencia','\App\Http\Controllers\Tipo_emergenciaController');
  Route::post('tipo_emergencia/{id}/update','\App\Http\Controllers\Tipo_emergenciaController@update');
  Route::get('tipo_emergencia/{id}/delete','\App\Http\Controllers\Tipo_emergenciaController@destroy');
  Route::get('tipo_emergencia/{id}/deleteMsg','\App\Http\Controllers\Tipo_emergenciaController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

//alerta Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('alerta','\App\Http\Controllers\AlertaController');
  Route::post('alerta/{id}/update','\App\Http\Controllers\AlertaController@update');
  Route::get('alerta/{id}/delete','\App\Http\Controllers\AlertaController@destroy');
  Route::get('alerta/{id}/deleteMsg','\App\Http\Controllers\AlertaController@DeleteMsg');
});

//terreno Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('terreno','\App\Http\Controllers\TerrenoController');
  Route::post('terreno/{id}/update','\App\Http\Controllers\TerrenoController@update');
  Route::get('terreno/{id}/delete','\App\Http\Controllers\TerrenoController@destroy');
  Route::get('terreno/{id}/deleteMsg','\App\Http\Controllers\TerrenoController@DeleteMsg');
});

//bitacora_terreno Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('bitacora_terreno','\App\Http\Controllers\Bitacora_terrenoController');
  Route::post('bitacora_terreno/{id}/update','\App\Http\Controllers\Bitacora_terrenoController@update');
  Route::get('bitacora_terreno/{id}/delete','\App\Http\Controllers\Bitacora_terrenoController@destroy');
  Route::get('bitacora_terreno/{id}/deleteMsg','\App\Http\Controllers\Bitacora_terrenoController@DeleteMsg');
});
Route::group(['middleware'=> 'web'],function(){
});
//info_junta_vecino Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('info_junta_vecino','\App\Http\Controllers\Info_junta_vecinoController');
  Route::post('info_junta_vecino/{id}/update','\App\Http\Controllers\Info_junta_vecinoController@update');
  Route::get('info_junta_vecino/{id}/delete','\App\Http\Controllers\Info_junta_vecinoController@destroy');
  Route::get('info_junta_vecino/{id}/deleteMsg','\App\Http\Controllers\Info_junta_vecinoController@DeleteMsg');
});
