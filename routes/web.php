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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('', 'BlogController@index')->name('articles');
Route::get('blog/{slug}', 'BlogController@show');
Route::get('about/me', 'BlogController@aboutme')->name('aboutme');
Route::get('screencasts', 'BlogController@screencasts')->name('screencasts');
Route::get('projects', 'BlogController@projects')->name('projects');
Route::get('journal', 'BlogController@journal')->name('journal');
Route::get('contact', 'BlogController@contact')->name('contact');
Route::get('projects/covid', 'BlogController@covid')->name('covid');

Route::post('contact', 'BlogController@sendmail');
