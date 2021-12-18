<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
     //client
     Route::get('demonstrativo/', 'Admin\DemonstrativeController@index')->name('demonstrative.index');
     Route::get('demonstrativo/create/', 'Admin\DemonstrativeController@create')->name('demonstrative.create');
     Route::post('demonstrativo/store/', 'Admin\DemonstrativeController@store')->name('demonstrative.store');
     Route::get('demonstrativo/edit/{id}/', 'Admin\DemonstrativeController@edit')->name('demonstrative.edit');
     Route::post('demonstrativo/update/{id}', 'Admin\DemonstrativeController@update')->name('demonstrative.update');
     Route::get('demonstrativo/delete/{id}', 'Admin\DemonstrativeController@destroy')->name('demonstrative.delete');
     Route::get('demonstrativo/relatorios/', 'Admin\DemonstrativeController@report')->name('demonstrative.report');
     Route::get('demonstrativo/search/', 'Admin\DemonstrativeController@search')->name('demonstrative.search');

});

Auth::routes();

