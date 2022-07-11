<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Web\FirstWebController;
use Illuminate\Support\Facades\Auth;


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

Route::get('agency', function () {
    return view('web/agency');
});


// Route::get('firstc', 'FirstController@showString');
// Route::get('first', 'App\Http\Controllers\Web\FirstWebController@showString');
// or
// Route::get('first', [FirstWebController::class, 'showString']);
// or
Route::group(['namespace' => 'App\Http\Controllers\Web'], function ()
{
    # code...
    Route::get('first', 'FirstWebController@showString');

}

);



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


Route::resource('news', NewsController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
