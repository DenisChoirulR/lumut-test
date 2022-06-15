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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/akun', 'AkunController@index')->name('akun.index');
Route::get('/akun/create', 'AkunController@create')->name('akun.create');
Route::post('/akun/store', 'AkunController@store')->name('akun.store');
Route::get('/akun/{id}/edit', 'AkunController@edit')->name('akun.edit');
Route::post('/akun/{id}/update', 'AkunController@update')->name('akun.update');
Route::get('/akun/{id}/destroy', 'AkunController@delete')->name('akun.destroy');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::post('/post/{id}/update', 'PostController@update')->name('post.update');
Route::get('/post/{id}/destroy', 'PostController@delete')->name('post.destroy');
