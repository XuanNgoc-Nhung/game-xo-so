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
})->name('user.home');
Route::get('/kqxs', function () {
    return view('kqxs');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');
    Route::get('/1-phut', function () {
        return view('admin.cauHinh.1Phut');
    })->name('admin.cauHinh.1Phut');
    Route::get('/1-phut-ruoi', function () {
        return view('admin.cauHinh.2Phut');
    })->name('admin.cauHinh.2Phut');
    Route::get('/3-phut', function () {
        return view('admin.cauHinh.3Phut');
    })->name('admin.cauHinh.3Phut');

    Route::post('/list-kq-lo-1p', 'GameController@ketQuaLoMotPhut');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
