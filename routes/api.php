<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
route::get('product', 'App\Http\controllers\ApiController@product_index');
route::POST('product/add', 'App\Http\controllers\Apicontroller@product_store');
route::get('product/{id}', 'App\Http\controllers\ApiController@product_by_id');
route::delete('product/{id}', 'App\Http\controllers\ApiController@product_delete_by_id');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
