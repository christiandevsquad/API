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

Route::get('/index', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/a', function () {
    return view('layouts.a');
});

Route::get('/product', function () {
    return view('add_product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
