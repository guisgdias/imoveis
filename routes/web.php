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

Route::get('/login', function () {
    return view('login');
});

Route::get('/imovel/{id}', function () {
    return view('imovel');
});



Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get("/", ["as" => "admin.imoveis.index", "uses" => "ImovelController@index"]);
    Route::get("/show/{immobile}", ["as" => "admin.imoveis.show", "uses" => "ImovelController@show"]);

    Route::get("/store", ["as" => "admin.imoveis.store", "uses" => "ImovelController@store"]);
    Route::post("/create", ["as" => "admin.imovel.create", "uses" => "ImovelController@create"]);

    Route::get("/edit/{immobile}", ["as" => "admin.imovel.edit", "uses" => "ImovelController@edit"]);
    Route::put("/update/{immobile}", ["as" => "admin.imovel.update", "uses" => "ImovelController@update"]);

    Route::get("/delete/{immobile}", ["as" => "admin.imovel.delete", "uses" => "ImovelController@destroy"]);

});

Auth::routes();

Route::get('/home', 'HomeController@index');
