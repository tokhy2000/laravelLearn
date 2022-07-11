<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/test', function () {
    return 'welcome';
});

// required parameter
Route::get('/test2/{id}', function ($id) {
    return $id;
});

// optional parameter
Route::get('/test3/{id?}', function () {
    return 'welcome';
});

