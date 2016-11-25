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

Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');

Route::get('/register','Auth\RegisterController@showRegistrationForm');
Route::post('/register','Auth\RegisterController@register');

Route::get('/','MenuController@showHome');

Route::get('/sapi','SapiController@showSapiView');
Route::get('/formsapi','SapiController@showForm');
Route::get('/sapiedit/{id}','SapiController@editDataSapi');
Route::get('/sapidetail/{id}','SapiController@viewDataSapi');

Route::get('/medis','MedisController@showDiagnosisView');
