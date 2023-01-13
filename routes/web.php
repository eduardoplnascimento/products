<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::get('/show/{id}', [ProductController::class, 'show']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::post('/destroy/{id}', [ProductController::class, 'destroy']);
});

// Rotas de autenticação
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/signin', [UserController::class, 'signin']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/logout', [UserController::class, 'logout']);
