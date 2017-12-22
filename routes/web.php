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

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controller@index');
Route::get('/about', 'Controller@about');
Route::get('/tickets', 'Controller@tickets');
Route::get('/travel', 'Controller@travel');
Route::get('/lodging', 'Controller@lodging');
Route::get('/food', 'Controller@food');
Route::get('/resources', 'Controller@resources');
Route::get('/schedule', 'Controller@schedule');
Route::get('/contact', 'Controller@contact');
Route::post('/contact', 'Controller@sendMessage');
Route::get('/message-preview/{id}', 'Controller@messagePreview');
Route::get('/speakers/{slug}', 'Controller@speaker');
