<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookGroupController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class,'show']);
Route::get('/Group/{id}', [BookGroupController::class,'show']);
Route::get('/Detail/{id}', [DetailController::class,'show']);
