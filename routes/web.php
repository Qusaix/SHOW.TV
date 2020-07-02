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
Route::get('/rigster','FrontEnd\AuthController@rigster')->name('frontend.rigster')->middleware('CheckLoginPage');
Route::post('/store','FrontEnd\AuthController@store')->name('frontend.storeUser');

Route::get('/login','FrontEnd\AuthController@login')->name('login')->middleware('CheckLoginPage');
Route::post('/login_button','FrontEnd\AuthController@login_button')->name('loginbutton');

Route::namespace('FrontEnd')->middleware(['auth'])->group(function(){

    Route::get('/','MainController@index')->name('frontend');
    Route::post('/logout','AuthController@logout')->name('logout');

    
    Route::prefix('episode')->group(function(){

        Route::get('{id}','EpisodeController@index')->name('episode');
        
    });

  

});
