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
    return view('auth.login');
});
Route::get('/quotes', 'QuoteController@index')->name('quotes.index');
Route::post('/quotes', 'QuoteController@store')->name('quotes.store');
Route::get('/quotes/{id}/edit', 'QuoteController@edit')->name('quotes.edit');
Route::put('/quotes/{id}', 'QuoteController@update')->name('quotes.update');
Route::delete('/quotes/{id}', 'QuoteController@destroy')->name('quotes.destroy');
   
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
