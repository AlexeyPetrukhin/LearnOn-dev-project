<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/test', function () {
    return view('sign-in');
});

Route::get('/', 'App\Http\Controllers\PageController@signInPage');
Route::get('/route', 'PageController@signIn');
Route::get('/debug','App\Http\Controllers\PageController@debug');

// Точка входа в систему / Страница входа
Route::get('/', 'App\Http\Controllers\PageController@signInPage')->name('main');


Route::prefix('recovery')->group(function (){

    // Восстановление пароля / Запрос почты
    Route::get('/','App\Http\Controllers\PageController@recoveryPage')->name('recovery');
    Route::post('/','App\Http\Controllers\PageController@sendMessage')->name('sendMessage');


    // Письмо отправлено
    Route::get('/send-letter','App\Http\Controllers\PageController@sendLetterPage')->name('sendLetter');

    // Новый пароль
    Route::get('/new-password','App\Http\Controllers\PageController@newPasswordPage');

    // Пароль установлен
    Route::get('/success-request','App\Http\Controllers\PageController@successRequestPage');
});


// Восстановление пароля
// Запрос почты




