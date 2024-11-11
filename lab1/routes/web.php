<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QltintucController;
use App\Http\Controllers\listStudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SinhvienController;
Route::get('/', function () {
    return view('home');
});

Route::get('/tintuc', [QltintucController::class, 'tintuc'])->name('tintuc');
Route::get('/tinhot/{id}', [QltintucController::class, 'tinhot'])->name('tinhot');

Route::get('/listsv', [SinhvienController::class, 'listsv'])->name('listsv');
Route::get('/thongtinsv/{id}', [SinhvienController::class, 'thongtinsv'])->name('thongtinsv');

