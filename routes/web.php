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

Route::get('/', 'CarsController@index');
Route::get('/cars/{id}', 'CarsController@show');
Route::get('/cars/{id}/create', 'CarsController@create');
Route::get('/cars/{id}/edit', 'CarsController@edit');
Route::post('/cars', 'CarsController@store');
Route::patch('cars/edit/{id}', 'CarsController@update');
Route::delete('cars/{id}', 'CarsController@destroy');
