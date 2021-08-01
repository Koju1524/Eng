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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
});

Route::group(['namespace' => 'Mail'], function () {
    Route::post('/vocabularySendMail/{id}', 'VocabularySendController@sendMail')->name('vocabularySend.sendMail');
});

Route::group(['prefix' => 'vocabulary', 'as' => 'vocabulary.', 'namespace' => 'User'], function () {
    Route::get('/', 'VocabularyController@index')->name('index');
    Route::get('/create', 'VocabularyController@create')->name('create');
    Route::post('/', 'VocabularyController@store')->name('store');
    Route::get('/{id}/edit', 'VocabularyController@edit')->name('edit');
    Route::put('/{id}', 'VocabularyController@update')->name('update');
    Route::get('/{id}', 'VocabularyController@show')->name('show');
    Route::delete('/{id}', 'VocabularyController@destroy')->name('destroy');
});