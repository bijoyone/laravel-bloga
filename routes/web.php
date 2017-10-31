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

/*Route::get('/home', function () {
    return view('home.index');
});*/




Route::get('/', function () {
    return view('clean_blog/index');
});

Route::get('/about', function () {
    return view('clean_blog/about');
});

Route::get('/contact', function () {
    return view('clean_blog/contact');
});

Route::get('/post', function () {
    return view('clean_blog/post');
});
