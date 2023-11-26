<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
route::get('/user', [UserController::class,'index']);
route::get('/user/create', [UserController::class,'create']);
route::POST('/user', [UserController::class,'store']);
route::PUT('/user/{id}', [UserController::class,'update']);
route::delete('/user/{id}', [UserController::class,'destsroy']);