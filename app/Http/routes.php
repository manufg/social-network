<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::post('/signup',['uses'=>'UserController@postSignUp',
    'as'=>'signup']);

Route::get('/dashboard',['uses'=>'PostController@getDashboard',
    'as'=>'dashboard',
    'middleware'=>'auth'
    ]);

Route::post('/signin',['uses'=>'UserController@postSignIn',
    'as'=>'signin']);

Route::post('/createpost',['uses'=>'PostController@postCreatePost',
    'as'=>'post.create']);
