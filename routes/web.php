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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// *------Login Routes--------------

Route::namespace('Student')->group(function (){
    Route::get('/login', 'LoginController@loginform');
    Route::post('/login', 'LoginController@loginauth')->name('login');
    Route::post('/logout', 'LoginContoller@logout')->name('logout');

    Route::get('/register', 'RegisterController@registerform');
    Route::post('/register', 'RegisterController@registerauth')->name('register');
});