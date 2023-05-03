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

Route::get('/', 'MainController@home');
Route::get('/profile', 'MainController@profile');
Route::get('/academic', 'MainController@academic');
Route::get('/news', 'MainController@news');
Route::get('/penerimaan', 'MainController@enrollment');
Route::get('/gallery', 'MainController@gallery');
Route::get('/alumni', 'MainController@alumni');   
Route::get('/dashboard', 'MainController@dashboard');

Route::resource('/dashboard/news', 'NewsController');
Route::resource('/dashboard/gallery', 'GalleryController');
Route::resource('/dashboard/alumni', 'AlumniController');
Route::post('/dashboard/alumni/create/store', 'GraduationController@store');
Route::delete('/dashboard/alumni/create/destroy/{id}', 'GraduationController@destroy');
Route::delete('/dashboard/alumni/destroy/{id}', 'AlumniController@destroy');

Route::view('/dashboard/pendaftaran', 'dashboard.enrollment.index');

Route::view('/dashboard/biaya', 'dashboard.enrollment.biaya');
Route::view('/loginn', 'login.index');
