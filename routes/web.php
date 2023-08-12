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
Route::get('/news/detail/{id}', 'MainController@news_detail');
Route::get('/penerimaan', 'MainController@enrollment');
Route::get('/gallery', 'MainController@gallery');
Route::get('/alumni', 'MainController@alumni');

Route::group(['middleware' => 'auth'], function () {

  Route::get('/home', 'MainController@redirect_dashboard');
  Route::get('/dashboard', 'MainController@dashboard');

  Route::delete('/dashboard/index/destroy/{id}', 'EkskulController@destroy');
  Route::post('/dashboard/index/store', 'EkskulController@store');
  Route::put('/dashboard/index/update/{id}', 'EkskulController@update');
  Route::get('/dashboard/edit/{id}', 'EkskulController@edit');

  Route::resource('/dashboard/news', 'NewsController');
  Route::resource('/dashboard/gallery', 'GalleryController');
  Route::resource('/dashboard/alumni', 'AlumniController');
  Route::delete('/dashboard/alumni/destroy/{id}', 'AlumniController@destroy');

  Route::post('/dashboard/alumni/create/store', 'GraduationController@store');
  Route::delete('/dashboard/alumni/create/destroy/{id}', 'GraduationController@destroy');

  Route::get('/dashboard/pendaftaran', 'MainController@pendaftaran');

  Route::resource('/dashboard/enrollment/syarat', 'SyaratPendaftaranController');
  Route::delete('/dashboard/enrollment/syarat/destroy/{id}', 'SyaratPendaftaranController@destroy');

  Route::resource('/dashboard/enrollment/agenda', 'AgendaPendaftaranController');
  Route::delete('/dashboard/enrollment/agenda/destroy/{id}', 'AgendaPendaftaranController@destroy');

  Route::resource('/dashboard/enrollment/biaya', 'BiayaPendaftaranController');
  Route::resource('/dashboard/enrollment/alur', 'AlurPendaftaranController');
  Route::resource('/dashboard/enrollment/status', 'StatusPendaftaranController');

  Route::put('/dashboard/header/home/update', 'HeaderController@home');
  Route::put('/dashboard/header/pendaftaran/update', 'HeaderController@pendaftaran');
  Route::resource('/dashboard/guru', GuruController::class);
});



// Route::get('/dashboard/syarat/{id}', 'SyaratPendaftaranController@edit');   
