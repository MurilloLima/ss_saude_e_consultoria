<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');

    //demonstrativos
    Route::get('demonstrativo/', 'Admin\DemonstrativeController@index')->name('demonstrative.index');
    Route::get('demonstrativo/create/', 'Admin\DemonstrativeController@create')->name('demonstrative.create');
    Route::post('demonstrativo/store/', 'Admin\DemonstrativeController@store')->name('demonstrative.store');
    Route::get('demonstrativo/edit/{id}/', 'Admin\DemonstrativeController@edit')->name('demonstrative.edit');
    Route::post('demonstrativo/update/{id}', 'Admin\DemonstrativeController@update')->name('demonstrative.update');
    Route::get('demonstrativo/delete/{id}', 'Admin\DemonstrativeController@destroy')->name('demonstrative.delete');
    Route::get('demonstrativo/relatorios/', 'Admin\DemonstrativeController@report')->name('demonstrative.report');
    Route::get('demonstrativo/search/', 'Admin\DemonstrativeController@search')->name('demonstrative.search');

    //medicos
    Route::get('medicos/', 'Admin\DoctorController@index')->name('doctor.index');
    Route::get('medico/create/', 'Admin\DoctorController@create')->name('doctor.create');
    Route::post('medico/store/', 'Admin\DoctorController@store')->name('doctor.store');
    Route::get('medico/edit/{id}/', 'Admin\DoctorController@edit')->name('doctor.edit');
    Route::post('medico/update/{id}', 'Admin\DoctorController@update')->name('doctor.update');
    Route::get('medico/delete/{id}', 'Admin\DoctorController@destroy')->name('doctor.delete');
    Route::get('medico/relatorios/', 'Admin\DoctorController@report')->name('doctor.report');
    Route::get('medico/search/', 'Admin\DoctorController@search')->name('doctor.search');

    //enderecos
    Route::get('enderecos/', 'Admin\AddressController@index')->name('address.index');
    Route::get('endereco/create/', 'Admin\AddressController@create')->name('address.create');
    Route::post('endereco/store/', 'Admin\AddressController@store')->name('address.store');
    Route::get('endereco/edit/{id}/', 'Admin\AddressController@edit')->name('address.edit');
    Route::post('endereco/update/{id}', 'Admin\AddressController@update')->name('address.update');
    Route::get('endereco/delete/{id}', 'Admin\AddressController@destroy')->name('address.delete');
    Route::get('endereco/relatorios/', 'Admin\AddressController@report')->name('address.report');
    Route::get('endereco/search/', 'Admin\AddressController@search')->name('address.search');
});

Auth::routes();
