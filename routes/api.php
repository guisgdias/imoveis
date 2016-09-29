<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
/*
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth:api'], function () {
    //LISTA TODOS OS PRÉ REGISTROS DE FARMACIA
    Route::get("imoveis/", ["as" => "api.admin.imoveis.index", "uses" => "ImovelController@index"]);
    Route::post("imoveis/", ["as" => "api.admin.imoveis.create", "uses" => "ImovelController@create"]);
    Route::get("imoveis/{immobile}", ["as" => "api.admin.imoveis.show", "uses" => "ImovelController@show"]);
    Route::put("imoveis/{immobile}", ["as" => "api.admin.imoveis.update", "uses" => "ImovelController@update"]);
    Route::delete("imoveis/{immobile}", ["as" => "api.admin.imoveis.destroy", "uses" => "ImovelController@destroy"]);
});
*/
Route::group(['prefix' => 'public'], function () {
    //LISTA TODOS OS PRÉ REGISTROS DE FARMACIA
    Route::get("imoveis/", ["as" => "api.public.imoveis.index", "uses" => "MainController@index"]);
    Route::get("imoveis/{immobile}", ["as" => "api.public.imoveis.show", "uses" => "MainController@show"]);
});


