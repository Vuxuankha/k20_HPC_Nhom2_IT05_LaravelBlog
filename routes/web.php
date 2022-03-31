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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/password', function () {
    return view('admin.password');
});

Route::get('/register' , function () {
    return view ('admin.register');
});
 */


Route::group(['prefix' => 'admin'], function() {
    //
    Route::get('/index', function () {
        return view('admin.index');
    })->middleware('admin');
    Route::get('/login', function () {
        return view('admin.login');
    })->middleware('admin');
    Route::get('/password', function () {
        return view('admin.password');
    })->middleware('admin');
    
    Route::get('/register' , function () {
        return view ('admin.register');
    });
});
