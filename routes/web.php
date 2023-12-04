<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});
route::get('/product', [ProductController::class,'index']);
route::get('/product/create', [ProductController::class,'create']);
route::POST('/product', [ProductController::class,'store']);
route::PUT('/product/{id}', [ProductController::class,'update']);
route::delete('/product/{id}', [ProductController::class,'destsroy']);
Auth::routes();

route::get('/user', [UserController::class,'index']);
route::get('/user/create', [UserController::class,'create']);
route::POST('/user', [UserController::class,'store']);
route::PUT('/user/{id}', [UserController::class,'update']);
route::delete('/user/{id}', [UserController::class,'destsroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
