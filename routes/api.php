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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Wyswietl urlopy
Route::get('trips','TripController@index');

//wyswietl 1 urlop za pomocy id

Route::get('trip/{id}','TripController@show');

//utworz nowy urlop

Route::post('trip','TripController@store');

//zedytuj urlop

Route::put('trip','TripController@store');

//usun urlop

Route::delete('trip/{id}','TripController@destroy');

//wyswietl uzytkownika
Route::get('login','UserController@show');

//Utworz uytkownika
Route::post('user','UserController@store');


//edytuj uzytkownika

Route::put('user','UserController@edit');