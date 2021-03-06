<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//======barang
Route::get('/posts', 'salesController@index');
Route::post('/posts/store', 'salesController@store');
Route::get('/posts/{id?}', 'salesController@show');
Route::post('/posts/update/{id?}', 'salesController@update');
Route::delete('/posts/{id?}', 'salesController@destroy');

Route::get('/search',function(){
    $query = Input::get('query');
    $users = Barang::where('nmBarang','like','%'.$query.'%')->get();
    return response()->json($users);
   });

//=======kategori
Route::get('/kategori', 'kategoriController@index');
Route::post('/kategori/store', 'kategoriController@store');
Route::get('/kategori/{id?}', 'kategoriController@show');
Route::post('/kategori/update/{id?}', 'kategoriController@update');
Route::delete('/kategori/{id?}', 'kategoriController@destroy');

//========supplier
Route::get('/supplier', 'supplierController@index');
Route::post('/supplier/store', 'supplierController@store');
Route::get('/supplier/{id?}', 'supplierController@show');
Route::post('/supplier/update/{id?}', 'supplierController@update');
Route::delete('/supplier/{id?}', 'supplierController@destroy');