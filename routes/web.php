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


Route::get('test', 'testcontroller@index');
Route::get('add_test', 'testcontroller@store')->name('add_test');




















Route::get('post', 'postcontroller@index');
Route::post('post', 'postcontroller@store')->name('post_store');
Route::resource('students','StudentController');
Route::post('addstudent','StudentController@store')->name('addstudent');
Route::get('data', 'datacontroller@index');












