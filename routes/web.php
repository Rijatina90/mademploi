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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'OffresfrontController@index');
Route::resource('offres', 'OffresController');

//contact
Route::get('contact', 'ContactController@create');
Route::post('cadidat', 'CandidatController@store')->name('posttule');
// Route::get('contact', 'ContactController@store');
