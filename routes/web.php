<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelControlller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;

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

Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);

Route::get('/level', [LevelControlller::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);