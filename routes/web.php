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
//
//Route::get('/', function () {
//    return view('pages.home');
//});

//Route::resource('posts','PostController ');


//PostController

Route::get('/posts', 'PostController@index');

Route::get('/post/new', 'PostController@create');

Route::get('/post/edit/{id}', 'PostController@edit')->where('id', '\w+');

Route::post('/post/save', 'PostController@save');

Route::put('/update/{id}', 'PostController@update')->where('id', '\w+');

Route::get('/post/{id}', 'PostController@show')->where('id', '\w+');

Route::delete('/post/{id}', 'PostController@destroy')->where('id', '\w+');

//TagController

Route::resource('tag', 'TagController');


//Route::get('/', function () {
//    return view('pages/home', [
//        'title' => 'Home Page',
//        'type' => 'home',
//        'ptb' => 'ptb-10'
//    ]);
//});
//
//Route::get('/categories', 'Categories@showAll');
//Route::get('/categories/{id}', 'Categories@showSingle');
//Route::get('/post/{id}', 'Posts@showSingle');

Auth::routes();

Route::get('/home', 'HomeController@index');
