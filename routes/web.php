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

Route::get('/', 'IndexController@list')->name('home');
Route::get('/create', 'IndexController@create')->name('create-file');
Route::post('/create', 'IndexController@store')->name('store-file');
Route::get('/{file}', 'IndexController@show')->name('file');
Route::get('/files/{file}/download-docx', 'IndexController@generateDocx');
Route::get('/{file}/download-xml', 'IndexController@generateXml');
