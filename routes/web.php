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

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/barang', function () {
    return view('pages.barang');
});
Route::get('/marketing', function () {
    return view('pages.marketing');
});
Route::get('/barang/{any}', function () {
    return view('app');
})->where('any','.*');


Route::get('/supplier', function () {
    return view('pages.supplier');
});
Route::get('/supplier/{any}', function () {
    return view('app');
})->where('any','.*');

Route::get('/get_countries', 'CountryStateController@getCountries');
Route::get('/get_states', 'CountryStateController@getStates');