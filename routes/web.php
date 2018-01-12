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

Route::view('/','welcome');

Route::view('contacts','contacts');

Route::view('about','about');

Route::prefix('reviews')->group(function(){
    Route::get('games', 'ContentController@index')->name('allgames');
    Route::get('games/{id}','ContentController@get_view')->name('gameReview');
    Route::get('pdf','ContentController@pdf')->name('pdf');
});

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::prefix('my/')->middleware('auth')->group(function(){
    Route::get('posts','ContentController@postIndex')->name('posts');
    Route::delete('delete/{id}','ContentController@delete')->name('deleteContent');
    Route::post('insert', 'ContentController@insert')->name('insert');
    Route::patch('update/{id}','ContentController@update')->name('update');
    Route::get('edit/{id}', 'ContentController@edit')->name('edit');
});

Route::get('users','HomeController@export')->name('users');

Route::resource('home','HomeController');

Route::get('sub', function (){
    if (Gate::allows('sub_only', Auth::User()))
        return view('sub');
    else
        return view('welcome');
 });
