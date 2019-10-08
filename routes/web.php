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

Route::get('/admin', function () {
    return view('contenido/contenido');
})->name('admin');
Route::get('/admin/slider','SliderController@index');
Route::post('/admin/slider/registerSlider','SliderController@store');
Route::post('/admin/slider/updateSlider','SliderController@update');
Route::post('/admin/slider/deletedSlider','SliderController@destroy');

Route::get('/admin/usuario','UserController@index');
Route::post('/admin/usuario/registerUser','UserController@store');
Route::post('/admin/usuario/updateUser','UserController@update');
Route::post('/admin/usuario/deletedUser','UserController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
