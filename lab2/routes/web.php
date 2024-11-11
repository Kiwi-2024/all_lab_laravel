<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('home');
});
Route::get('/xemnhieu', [PostController::class, 'xemnhieu'])->name('xemnhieu');
Route::get('/chitiettin/{id}', [PostController::class, 'chiTiet'])->name('chitiet');

Route::get('/categories', [CategoryController::class, 'category'])->name('category');
Route::get('/listpost/{id}', [CategoryController::class, 'listpost'])->name('listpost');
