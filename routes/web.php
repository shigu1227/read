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
Route::get('/','Index\IndexController@index');
Route::get('login','Index\IndexController@login');
Route::get('wxre','Index\IndexController@wxre');
Route::get('imag','Index\IndexController@imag');
Route::get('wx','Index\IndexController@wx');
Route::post('wx','Index\IndexController@wxs');

Route::get('index/login','Index\IndexController@loginlist');
Route::post('index/logins','Index\IndexController@logins');
Route::get('index/ajaxre','Index\IndexController@ajaxre');

//login控制器
Route::post('login/yan','Index\LoginController@yan');
Route::get('login/reg','Index\LoginController@reglist');
Route::post('login/regins','Index\LoginController@regins');

//books  書記控制器
Route::get('books/suo','Index\BooksController@suo');
Route::get('books/yue','Index\BooksController@yue');



