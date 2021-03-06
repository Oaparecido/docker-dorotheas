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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::resource('user', 'UserController')->names('users');
    Route::resource('course', 'CourseController')->names('course');
    Route::post('login', 'Auth\LoginController@store')->name('login.store');
});

