<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user',function(Request $request){
    return $request->user();
});

Route::GET('ambilData','MahasiswaController@index');
Route::POST('inputData','MahasiswaController@create');
Route::POST('inputDC','DatacenterController@create');
Route::PUT('/mahasiswa/{id}','MahasiswaController@update');
Route::DELETE('/mahasiswa/{id}','MahasiswaController@delete');
