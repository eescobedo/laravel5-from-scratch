<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');


Route::get('about', function () {
    return view('pages.about');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('cards', 'CardsController@index');
    //Route::get ('cards/{id}', 'CardsController@show');
    Route::get('cards/{card}', 'CardsController@show');

    Route::post('cards/{card}/notes', 'NotesController@store');
    Route::get('notes/{note}/edit', 'NotesController@edit');
    Route::patch('notes/{note}', 'NotesController@update');

    Route::auth();

    Route::get('/dashboard', 'HomeController@index');
//    Route::get('/home', 'HomeController@index');
});

//Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//});
