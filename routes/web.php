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

// Восстановление пароля
// Запрос почты
Route::get('/recovery','App\Http\Controllers\PageController@recoveryPage')->name('recovery');
Route::post('/recovery','App\Http\Controllers\PageController@recoveryPage');

// Письмо отправлено
Route::get('/send-letter','App\Http\Controllers\PageController@sendLetterPage')->name('sendLetter');

// Новый пароль
Route::get('/new-password','App\Http\Controllers\PageController@newPassword');

