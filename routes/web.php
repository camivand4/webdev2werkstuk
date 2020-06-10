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
Route::name('webhooks.mollie')->post('webhooks/mollie', 'WebHookController@handle')->name('mollie');

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('about', 'TestController@about')->name('about');
Route::get('privacy', 'TestController@privacy')->name('privacy');
Route::get('subscribed', 'TestController@subscribed')->name('subscribed');

Auth::routes();

