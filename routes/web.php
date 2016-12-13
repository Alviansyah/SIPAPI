<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () { return view('auth.login'); });
// Autentikasi
//      Login
Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');
// Register
Route::get('/register','Auth\RegisterController@showRegistrationForm');
Route::post('/register','Auth\RegisterController@register');

// Home
Route::get('/','MenuController@showHome');

// Pemeliharaan
//      Identitas Sapi
Route::get('/sapi','SapiController@showSapiView');
Route::post('/sapi','SapiController@showSapiView');
Route::get('/tambah','SapiController@addDataSapi');
Route::get('/sapiedit/{id}','SapiController@editDataSapi');
Route::get('/sapidetail/{id}','SapiController@viewDataSapi');
Route::get('/sapiarsip/{id}','SapiController@arsipkanDataSapi');
Route::post('/tambahsapi','SapiController@tambahDataSapi');
Route::post('/updatesapi/{id}','SapiController@updateDataSapi');
//      Rekam Medis
Route::get('/medis','MedisController@showRekamMedisView');
//      Jadwal Pakan
Route::get('/jadwalpakan','SapiController@showJadwalPakanView');

// Penyakit
//      Pemeriksaan
Route::get('/pemeriksaan','PenyakitController@showPemeriksaanView');
Route::post('/tambahpemeriksaan','PenyakitController@tambahEntryPemeriksaan');
//      Diagnosis
Route::post('/analisis/{id}','PenyakitController@analisisDataPemeriksaan');
//      Daftar Penyakit
Route::get('/daftarpenyakit','PenyakitController@showDaftarPenyakit');
