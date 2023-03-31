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
Route::view('/penerimaan', 'enrollment');
Route::view('/gallery', 'gallery');
Route::view('/alumni', 'alumni');   

Route::view('/dashboard', 'dashboard.index');

Route::view('/dashboard/news', 'dashboard.news.index');
Route::view('/dashboard/news/detail', 'dashboard.news.edit');
Route::view('/dashboard/news/create', 'dashboard.news.create');

Route::view('/dashboard/gallery', 'dashboard.gallery.index');
Route::view('/dashboard/gallery/create', 'dashboard.gallery.create');

Route::view('/dashboard/alumni', 'dashboard.alumni.index');

Route::view('/dashboard/pendaftaran', 'dashboard.enrollment.index');

