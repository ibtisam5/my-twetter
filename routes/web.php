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

Route::get('ibtisam',function(){
    app()->setLocale('en');
    return view('ibtisam');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@hello')->name('hello');

Route::get('/timeline', 'TweetsController@timeline');
Route::post('/tweet/create', 'TweetsController@createTweet');

Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@contactPost')->name('contactPost');
// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('lang/{lang}', 'LanguageController@switchLang')->name('lang.switch');
Route::get('/languageDemo', 'HomeController@languageDemo');

