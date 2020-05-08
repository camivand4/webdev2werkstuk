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

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('clients', 'ClientController@getIndex')->name('clients');
Route::get('clients/new', 'ClientController@getCreate')->name('clients.new');
Route::get('clients/{client}', 'ClientController@getEdit')->name('clients.edit');
Route::post('clients/save', 'ClientController@postSave')->name('clients.save');

Route::any('rooms/{clientId}', 'RoomsController@checkAvailableRooms')->name('rooms.availibilty');

Route::get('reservations', 'ReservationsController@getIndex')->name('reservations');
Route::get('reservations/new/{clientId}', 'ReservationsController@getCreate')->name('reservations.new');
Route::get('reservations/{id}', 'ReservationsController@getEdit')->name('reservations.edit');
Route::post('reservations/save', 'ReservationsController@postSave')->name('reservations.save');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
