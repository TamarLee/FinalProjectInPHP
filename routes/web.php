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
    return view('home');
});

Route::get("/contact", function(){
	return view('contact');
});

Route::get("/blog", "BlogController@showBlog");

Route::get("/price", function(){
	return view('price');
});

Route::get("/testimonial", function(){
	return view('testimonial');
});

Route::get("/trainer", "TrainerController@showTrainer");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
