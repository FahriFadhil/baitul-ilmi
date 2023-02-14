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

Auth::routes();

Route::view('/', 'home');
Route::view('/profile', 'profile');
Route::view('/academic', 'academic');
Route::view('/news', 'news.index');
Route::view('/enrollment', 'enrollment');
Route::view('/gallery', 'gallery');
