<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('users.create');
});

Route::get('/create_client', function () {
    return view('clientes.create_client');
});

Route::get('/create_product', function () {
    return view('productos.create_product');
});

Route::get('/create_vendor', function () {
    return view('proveedores.create_vendor');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('users', 'App\Http\Controllers\UserController@index') ->name('users');
    Route::post('user/save', 'App\Http\Controllers\UserController@save') ->name('user.save');
    Route::get('user/delete/{id}', 'App\Http\Controllers\UserController@delete') ->name('user.delete');
    Route::get('user/{id}/edit', 'App\Http\Controllers\UserController@edit') ->name('user.edit');
    Route::put('user/{id}', 'App\Http\Controllers\UserController@update') ->name('user.update');




    Route::get('clientes', 'App\Http\Controllers\ClientController@index')->name('clients');
    Route::post('clientes/save', 'App\Http\Controllers\ClientController@save') ->name('cliente.save');
    Route::get('clientes/delete/{id}', 'App\Http\Controllers\ClientController@delete') ->name('cliente.delete');
    Route::get('clientes/{id}/edit', 'App\Http\Controllers\ClientController@edit') ->name('cliente.edit');
    Route::put('clientes/{id}', 'App\Http\Controllers\ClientController@update') ->name('cliente.update');




    Route::get('productos', 'App\Http\Controllers\ProductController@index')->name('products');
    Route::post('productos/save', 'App\Http\Controllers\ProductController@save')->name('producto.save');
    Route::get('productos/delete/{id}', 'App\Http\Controllers\ProductController@delete') ->name('producto.delete');
    Route::get('productos/{id}/edit', 'App\Http\Controllers\ProductController@edit') ->name('producto.edit');
    Route::put('productos/{id}', 'App\Http\Controllers\ProductController@update') ->name('producto.update');





    Route::get('proveedores', 'App\Http\Controllers\VendorController@index')->name('vendor');
    Route::post('proveedores/save', 'App\Http\Controllers\VendorController@save')->name('vendor.save');
    Route::get('proveedores/delete/{id}', 'App\Http\Controllers\VendorController@delete') ->name('vendor.delete');
    Route::get('proveedores/{id}/edit', 'App\Http\Controllers\VendorController@edit') ->name('vendor.edit');
    Route::put('proveedores/{id}', 'App\Http\Controllers\VendorController@update') ->name('vendor.update');




    Route::get('icons', function () {return view('pages.icons');})->name('icons');

});

