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

Route::get('mailchimp', 'NewsLetterController@getmailchimp')->name('mailchimp');
Route::post('mailchimp', 'NewsLetterController@postmailchimp')->name('mailchimp.save');

Route::get('donation', 'ShopController@donation')->name('donation');
Route::get('betalen', 'ShopController@getMakePayment')->name('makePayment');
Route::get('succes', 'ShopController@getSuccess')->name('paymentSucces');
Route::post('webhooks/mollie', 'WebHookController@handle')->name('webhooks.mollie');

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('about', 'PagesController@about')->name('about');
Route::get('privacy', 'PagesController@privacy')->name('privacy');
Route::get('subscribed', 'PagesController@subscribed')->name('subscribed');

Route::get('detailpagina', 'PagesController@detailpagina')->name('detailpagina');

Route::prefix('dashboard')->as('dashboard.')->group(function(){
    Route::group(['middleware'=> ['verified']], function() {
        Route::get('/olliebollies', 'DashboardController@getIndexOlliebollies')->name('olliebollies.index');

        Route::get('/olliebollies/create', 'DashboardController@getCreateOlliebollie')->name('olliebollies.create');
        Route::post('/olliebollies/create', 'DashboardController@postCreateOlliebollie')->name('olliebollies.create.post');

        Route::get('/olliebollies/edit/{olliebollie}', 'DashboardController@getEditOlliebollie')->name('olliebollies.edit');
        Route::post('/olliebollies/edit/{olliebollie}', 'DashboardController@postEditOlliebollie')->name('olliebollies.edit.post');

        Route::post('/olliebollies/delete', 'DashboardController@postDeleteOlliebollie')->name('olliebollies.delete');
    });
});

// Route::get('/{slug}', 'OlliebollieController@getOlliebollie')->name('olliebollie');

Auth::routes();
