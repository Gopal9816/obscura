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

Route::get('/', 'PagesController@index')->name('login');
Route::get('/leaderboard','PagesController@leaderboard');
Route::get('/rules','PagesController@rules');
//Auth::routes();
Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register/{id}','RegisterNewController@store')->name('register');

Route::get('login/{provider}', 'RegisterNewController@redirectToProvider');
Route::get('login/{provider}/callback', 'RegisterNewController@handleProviderCallback');

Route::get('/game','GameController@index');
Route::get('/game/red','GameController@pill');
Route::get('/game/blue','GameController@teaser');
Route::post('/game','GameController@answer');

Route::get('/edit','HomeController@edit');
Route::post('/edit/{id}','HomeController@update');
