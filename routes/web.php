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


/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('airport/{iata}', 'AirportController@show')->name('airport');
Route::get('airport/search/{term}', 'AirportController@search')->name('airport.search');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
 */

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
