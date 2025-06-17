<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/store', 'App\Http\Controllers\BoodschapController@store');


Route::get('/boodschappen', function () {
    return view('boodschappen');
});

Route::post('/store', 'App\Http\Controllers\BoodschapController@store');
Route::get('/boodschappen', '\App\Http\Controllers\BoodschapController@index');
// Route::get('/boodschappen', [MessageController::class, 'index']);

Route::delete(
    '/destroy/{id}',
    '\App\Http\Controllers\BoodschapController@destroy'
);


Route::get('/boodschappen', '\App\Http\Controllers\BoodschapController@index');

Route::get(
    '/edit/{id}',
    '\App\Http\Controllers\BoodschapController@edit'
);

Route::put(
    '/update',
    '\App\Http\Controllers\BoodschapController@update'
);


Route::get('/', '\App\Http\Controllers\PageController@getHome');
Route::get('/about', '\App\Http\Controllers\PageController@getAbout');
Route::get('/contact', '\App\Http\Controllers\PageController@getContact');

Route::get('/nieuw', '\App\Http\Controllers\PageController@getNieuw');
