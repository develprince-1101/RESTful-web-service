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

//Barangay CRUD
Route::post('store-barangay', 'BarangayController@store');
Route::post('{id}/update-barangay', 'BarangayController@update');
Route::get('barangays/del/{id}', 'BarangayController@destroy');

//Address CRUD
Route::post('store-address', 'AddressController@store');
Route::post('{id}/update-address', 'AddressController@update');
Route::get('addresses/del/{id}', 'AddressController@destroy');

//Doctor && Doctor Specialization CRUD
Route::post('store-doctor', 'DoctorController@store');
Route::post('{id}/update-doctor', 'DoctorController@update');
Route::get('doctors/del/{id}', 'DoctorController@destroy');
Route::post('store-docspec/{doctor}', 'DocSpecController@store');
Route::get('docspec/del/{doc_id}/{spec_id}', 'DocSpecController@destroy');

//Specialization CRUD
Route::post('store-specialization', 'SpecializationController@store');
Route::post('{id}/update-specialization', 'SpecializationController@update');
Route::get('specializations/del/{id}', 'SpecializationController@destroy');

//Service && Hospital Service CRUD
Route::post('store-service', 'ServicesController@store');
Route::post('{id}/update-service', 'ServicesController@update');
Route::get('services/del/{id}', 'ServicesController@destroy');
Route::post('store-hospital-service/{hospital_id}', 'HospitalServiceController@store');
Route::get('hospital-service/del/{hospital_id}/{service_id}', 'HospitalServiceController@destroy');

//Hospital && Doctor Hospital CRUD
Route::post('store-hospital', 'HospitalController@store');
Route::post('{id}/update-hospital', 'HospitalController@update');
Route::get('hospitals/del/{id}', 'HospitalController@destroy');
Route::post('store-doctor-hospital/{hospital}', 'DoctorHospitalController@store');
Route::get('doctor-hospital/del/{hospital_id}/{doctor_id}', 'DoctorHospitalController@destroy');














