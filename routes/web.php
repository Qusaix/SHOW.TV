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
Route::get('/','FrontEnd\MainController@index')->name('frontend');

Route::prefix('search')->group(function(){
    Route::post('/','FrontEnd\SearchController@index')->name('search');
});


Route::namespace('FrontEnd')->middleware(['auth'])->group(function(){

    Route::post('/logout','AuthController@logout')->name('logout');

    
    Route::prefix('episode')->group(function(){

        Route::get('{id}','EpisodeController@index')->name('episode');
        
    });

    Route::prefix('series')->group(function(){
        Route::get('/{id}','SeriesController@index')->name('series');
    });

    Route::prefix('reaction')->group(function(){

        Route::post('/','ReactionController@reaction')->name('reaction');

    });

    Route::prefix('follow')->group(function(){
        Route::post('/follow_button','FollwoController@follwo_button')->name('follow_button');
    });


  

});

Route::namespace('Dashboard')->prefix('dashboard')->middleware(['auth','role:admin'])->group(function(){

    Route::prefix('users')->group(function(){
        Route::get('/','UsersController@index')->name('dashboard.users');
    });

    Route::prefix('series')->group(function(){
        Route::get('/','SeriesController@index')->name('dashboard.series');

        // Create 
        Route::get('/create','SeriesController@create')->name('dashboard.series.create');
        Route::post('/store','SeriesController@store')->name('dashboard.series.store');

        //Edit
        Route::get('/edit/{id}','SeriesController@edit')->name('dashboard.series.edit');
        Route::post('/update/{id}','SeriesController@update')->name('dashboard.series.update');

    });

    Route::prefix('episode')->group(function(){

        Route::get('/','EpisodesController@index')->name('dashboard.episodes');

        // Create 
        Route::get('/create','EpisodesController@create')->name('dashboard.episodes.create');
        Route::post('/store','EpisodesController@store')->name('dashboard.episodes.store');

        // Edit
        Route::get('/edit/{id}','EpisodesController@edit')->name('dashboard.episodes.edit');
        Route::post('/update/{id}','EpisodesController@update')->name('dashboard.episodes.update');
    });

});
