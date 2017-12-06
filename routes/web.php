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

Route::get('sub',function (){
   if (Gate::allows('sub_only',Auth::User()))
       return view('sub');
   else
       return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
});
Route::prefix('content')->group(function(){
    Route::get('all',['uses' => 'ContentController@index', 'as' => 'all']);
    Route::post('insert',['uses' => 'ContentController@insert', 'as' => 'insert']);
    Route::delete('remove/{id}',['uses' => 'ContentController@delete', 'as' => 'deleteContent']);
    Route::get('post/{id}',['uses' => 'ContentController@get_view', 'as' => 'get_view']);
});



Route::prefix('new')->group(function ()
{
    Route::get('header.main',['uses' => 'ContentController@index', 'as'=>'header.main']);
    Route::get('games/{id}',['uses' => 'ContentController@get_view', 'as'=>'gameReview']);
    Route::delete('delete/{id}',['uses' => 'ContentController@delete', 'as'=>'delete']);
});
Auth::routes();
