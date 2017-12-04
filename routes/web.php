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

Route::prefix('Production')->middleware('auth')->group(function (){
    Route::get('new',['as'=>'Shit','uses'=>'ProductController@index']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home','HomeController');



Route::get('/main', function () {
    return view('master');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});


Route::prefix('new')->middleware('guest')->group(function ()
{
    Route::get('header.main',['uses' => 'ContentController@index', 'as'=>'header.main']);
    Route::get('games/{id}',['uses' => 'ContentController@get_view', 'as'=>'gameReview']);
});
Auth::routes();
