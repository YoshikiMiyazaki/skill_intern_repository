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

Route::get('/input/', "ContactController@input")->name("contact.input");

Route::post('/input/', "ContactController@post");

Route::get('/confirm/{name}/{hurigana}/{mail}/{content}/', "ContactController@confirm")->name("contact.confirm");

Route::post('/confirm/{name}/{hurigana}/{mail}/{content}/', "ContactController@create");

Route::get('/complete/', "ContactController@complete")->name("contact.complete");


// Route::resource('/countact/', "ContactController");
