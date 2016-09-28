<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imovel/{id}', function () {
    return view('imovel');
});

Route::get('/admin/', function () {
    return view('admin.home');
});

Route::get('/admin/show', function () {
    return view('admin.view');
});

Route::get('/admin/store', function () {
    return view('admin.create');
});

Route::get('/admin/edit', function () {
    return view('admin.edit');
});
