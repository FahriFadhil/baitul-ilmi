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

use App\Http\Controllers\NewsController;

Auth::routes();

Route::view('/', 'home');
Route::view('/profile', 'profile');
Route::view('/academic', 'academic');
Route::view('/news', 'news.index');
Route::view('/penerimaan', 'enrollment');
Route::view('/gallery', 'gallery');
Route::view('/alumni', 'alumni');   

Route::view('/dashboard', 'dashboard.index');

Route::resource('/dashboard/news', 'NewsController');

Route::resource('/dashboard/gallery', 'GalleryController');

Route::resource('/dashboard/alumni', 'AlumniController');

Route::post('/dashboard/alumni/create/store', 'GraduationController@store');
Route::delete('/dashboard/alumni/create/destroy/{id}', 'GraduationController@destroy');
Route::delete('/dashboard/alumni/destroy/{id}', 'AlumniController@destroy');

Route::view('/dashboard/pendaftaran', 'dashboard.enrollment.index');
Route::view('/loginn', 'login.index');
