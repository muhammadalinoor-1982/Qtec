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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'MainController@search')->name('search.view');
Route::get('word', 'MainController@word')->name('word');

Route::prefix('User')->group(function()
{
Route::get('view', 'UserController@view')->name('view.user');
Route::get('create', 'UserController@create')->name('create.user');
Route::post('store', 'UserController@store')->name('store.user');
});

Route::prefix('Search')->group(function()
{
Route::get('view', 'SearchController@view')->name('view.search');
Route::get('create', 'SearchController@create')->name('create.search');
Route::post('store', 'SearchController@store')->name('store.search');
});
