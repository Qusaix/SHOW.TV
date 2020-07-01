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


Route::namespace('FrontEnd')->group(function(){

    Route::get('/','MainController@index')->name('frontend')->middleware('auth');
    Route::get('/rigster','AuthController@rigster')->name('frontend.rigster')->middleware('CheckLoginPage');
    Route::post('/store','AuthController@store')->name('frontend.storeUser');
    Route::get('/login','AuthController@login')->name('login')->middleware('CheckLoginPage');
    Route::post('/login_button','AuthController@login_button')->name('loginbutton');
    Route::post('/logout','AuthController@logout')->name('logout');

});
