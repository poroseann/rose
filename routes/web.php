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
    return view('welcome');
});
Route::post('/search', 'MainController@search');
Route::get('/get-details/{id}', 'MainController@getDetails');
Route::get('/level-1', 'MainController@getLevel1');
Route::get('/level-2', 'MainController@getLevel2');
Route::get('/level-3', 'MainController@getLevel3');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/create-new', 'AdminController@createNew');
    Route::post('/save', 'AdminController@save');
    Route::get('/hospital-list', 'AdminController@hospitalList');
});
