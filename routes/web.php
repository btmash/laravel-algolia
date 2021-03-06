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

Auth::routes();

Route::get('/books', 'BookController@index')->name('books');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/book/new', 'BookController@create')->name('create_new_book');
    Route::post('/book/new', 'BookController@store')->name('store_new_book');
});

Route::get('/home', 'HomeController@index')->name('home');
