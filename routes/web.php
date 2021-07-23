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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mail','MailController@sendMailView');
Route::post('send_mail', 'MailController@sendMail')->name('sendMail');

// ================== NOTE ==================
// For this error in send email using smtp => stream_socket_enable_crypto(): SSL operation failed with code 1 Laravel 7, 
// Go to this link to solve => https://laracasts.com/discuss/channels/laravel/stream-socket-enable-crypto-ssl-operation-failed-with-code-laravel-7
