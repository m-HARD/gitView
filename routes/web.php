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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userProfile', function () {
    return view('user_views.pages.userHome');
})->name('home2')->middleware('auth');

Route::resource('user', 'userEdit')->only(['edit', 'update'])->middleware('auth');
