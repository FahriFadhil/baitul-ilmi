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
Route::delete('/dashboard/alumni/destroy/{id}', 'AlumniController@destroy');
// Alumni
Route::post('/dashboard/alumni/create/store', 'GraduationController@store');
Route::delete('/dashboard/alumni/create/destroy/{id}', 'GraduationController@destroy');


// Pendaftaran

Route::get('/dashboard/pendaftaran', 'MainController@pendaftaran');
// // Syarat
Route::resource('/dashboard/enrollment/syarat', 'SyaratPendaftaranController');
// // Biaya
Route::get('/dashboard/enrollment/biaya/edit', 'BiayaPendaftaranController@edit');
Route::put('/dashboard/enrollment/biaya/update', 'BiayaPendaftaranController@update');

Route::view('/loginn', 'login.index');

// Route::get('/dashboard/syarat/{id}', 'SyaratPendaftaranController@edit');   
