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
Route::get('/home/settings', function () {
    return view('settings.main');
});
//USERS
Route::get('/home/settings/users','usersController@main');

//Ladding Page
Route::get('/home/ladingPage','ladingPageController@main');
Route::get('/home/ladingPage/sliderMain','ladingPageController@sliderMain');
Route::post('/home/ladingPage/sliderMain/create','ladingPageController@sliderCreate');
