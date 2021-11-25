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

Route::get('/','PageController@welcome');

Route::get('package','PageController@package');
Route::get('about','PageController@aboutus');
Route::get('payment','PageController@payment');
Route::get('services','PageController@services');
Route::get('team','PageController@team');
Route::get('contactus','PageController@contactus');
Route::post('message', 'PageController@message');
Route::view('404','404');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
