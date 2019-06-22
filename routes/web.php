<?php

use Illuminate\Http\Request;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
Route::get('/arkliai', 'ArkliaiController@index')->name('arkliai');
Route::get('/dice', 'DiceController@index')->name('Dice');
Route::get('/', 'IndexController@index')->name('Home');
Route::resource('cars', 'CarController');
