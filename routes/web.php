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

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'api.', 'prefix'=>'api'], function () {
    Route::resource('grades', 'GradeController', ['except' => ['edit', 'create']]);
    Route::resource('users', 'UserController', ['except' => ['edit', 'create']]);
    Route::resource('classes', 'ClassController', ['except' => ['edit', 'create']]);
});
