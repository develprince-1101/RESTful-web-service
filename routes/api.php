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

Route::get('businesses', 'BusinessEntityController@index');
Route::get('businesses/{id}','BusinessEntityController@show');
Route::get('businesses/search/{query}', 'BusinessEntityController@search');
Route::post('businesses','BusinessEntityController@store');
Route::delete('businesses/{id}','BusinessEntityController@destroy');
Route::put('businesses/{id}','BusinessEntityController@update');

Route::get('businesstypes', 'BusinessTypeController@index');
Route::get('businesstypes/{id}', 'BusinessTypeController@show');
Route::get('businesstypes/search/{query}', 'BusinessTypeController@search');
Route::post('businesstypes', 'BusinessTypeController@store');
Route::delete('businesstypes/{id}', 'BusinessTypeController@destroy');
Route::put('businesstypes/{id}', 'BusinessTypeController@update');

Route::get('businessaddress', 'BusinessAddressController@index');
Route::get('businessaddress/{id}', 'BusinessAddressController@show');

Route::get('address', 'AddressController@index');
Route::get('address/{id}', 'AddressController@show');



