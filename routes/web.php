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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/icons', function () {
    return view('icons');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/typography', function () {
    return view('typography');
});
Route::get('/upgrade', function () {
    return view('upgrade');
});
Route::get('/user', function () {
    return view('user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
