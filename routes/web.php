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
    return view('basic/home');
});

Route::get('/about', function () {
    return view('basic/about');
});
Route::get('/contact', function () {
    return view('basic/contact');
});
Route::post('/contact/submit','MessageController@submit');
Route::get('/message/show','MessageController@getMessage');



Route::resource('Student','StudentController');


Route::resource('products','ProductController');
Route::post('product','ProductController@store');
Route::get('products/update','ProductController@update');



Route::get('posts/create','CrudController@create');
Route::post('/posts','CrudController@store');
Route::get('/posts','CrudController@index');
Route::get('posts/show/{post}','CrudController@show');
Route::get('/posts/{id}/edit','CrudController@edit');
Route::get('/posts/update','CrudConroller@update');

Route::get('/blog/create','PostController@create');
Route::post('/blog','PostController@store');
Route::get('blog','PostController@index');
Route::get('/blog/show/{post}','PostController@show');
Route::get('/blog/{id}/edit','PostController@edit');
Route::post('/blog/update','PostController@update');
Route::get('blog/{id}/delete','PostController@destroy');

Route::get('page/create','Pagination@create');
Route::post('page','Pagination@store');
Route::get('page','Pagination@index');
Route::get('page/show/{id}','Pagination@show');