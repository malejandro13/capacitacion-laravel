<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'ContactController@store');

Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');
Route::get('/portfolio/{project:slug}', 'ProjectController@show')->name('projects.show');

Route::post('/portfolio', 'ProjectController@store')->name('projects.store');


//Route::resource('/projects', 'ProjectController');

