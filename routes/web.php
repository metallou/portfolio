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

Route::get('/', 'HomeController@introduction')->name('introduction');
Route::get('/studies', 'HomeController@studies')->name('studies');
Route::get('/experiences', 'HomeController@experiences')->name('experiences');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/carpediem', 'HomeController@carpediem')->name('carpediem');
Route::get('/cv', 'HomeController@cv')->name('cv');
