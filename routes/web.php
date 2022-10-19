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

/*Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'ReviewController@index');
Route::get('/camps', 'ReviewController@index');
Route::get('/camps/create', 'ReviewController@create');
Route::get('/camps/{site}', 'ReviewController@site');


//Auth::routes();
