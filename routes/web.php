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

Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('iscriviti', 'AdmissionController@index')->name('admission.index');
    Route::post('iscriviti', 'AdmissionController@save')->name('admission.save');
});
