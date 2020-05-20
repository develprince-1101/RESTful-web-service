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

Route::get('about', function (){
    return view('about');

});

Route::get('landing', function (){
    return view('landing');

});

Route::get('landing2', function (){
    return view('landing2');

});

//Barangay views
Route::get('barangays','BarangayController@index');
Route::get('add-barangay','BarangayController@add');
Route::get('barangays/{barangay}', 'BarangayController@show');

//Address views
Route::get('addresses','AddressController@index');
Route::get('add-address', 'AddressController@add');
Route::get('addresses/{address}', 'AddressController@show');

//Doctor views
Route::get('doctors','DoctorController@index');
Route::get('add-doctor', 'DoctorController@add');
Route::get('doctors/{doctor}', 'DoctorController@show');
Route::get('docspec/{doctor}', 'DocSpecController@index');

//Specialization views
Route::get('specializations', 'SpecializationController@index');
Route::get('add-specialization', 'SpecializationController@add');
Route::get('specializations/{specialization}', 'SpecializationController@show');

//service views
Route::get('services', 'ServicesController@index');
Route::get('add-service', 'ServicesController@add');
Route::get('services/{service}', 'ServicesController@show');

//hospital views
Route::get('hospitals', 'HospitalController@index');
Route::get('add-hospital', 'HospitalController@add');
Route::get('hospitals/{hospital}', 'HospitalController@show');
Route::get('doctor-hospital/{hospital}', 'DoctorHospitalController@index');
Route::get('hospital-service/{hospital}', 'HospitalServiceController@index');



