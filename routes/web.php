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

Route::get('/', 'QuoteController@create');
Route::get('/form/{code?}', 'QuoteController@create')->name('get.form');
Route::post('/form/profile', 'QuoteController@store_profile')->name('form.profile.store');
Route::post('/form/vehicle', 'QuoteController@store_vehicle')->name('form.vehicle.store');
Route::post('/form/driver', 'QuoteController@store_driver')->name('form.driver.store');
Route::post('/form/coverage', 'QuoteController@store_quote')->name('form.coverage.store');

Route::get('/tanks', function(){
    return view('quote.thanks');
})->name('thanks');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
