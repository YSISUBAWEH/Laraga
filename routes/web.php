<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\FirstController;
use App\Http\Controllers\admin\TuController;
use App\Http\Controllers\admin\TkController;
use Illuminate\Support\Facades\Route;

Route::get('/sign-up-to-babagram', function () {
    return view('auth.sign-up1');
})->name('N.up1');

Route::get('/complete-the-data', function () {
    return view('auth.sign-up2');
})->name('N.up2');

Route::get('/sign-in-to-babagram', function () {
    return view('auth.sign-in');
})->name('N.in');

Route::post('/sign-up-processing', [AuthController::class, 'register'])->name('N.upP');
Route::post('/complete-processing', [AuthController::class, 'complete'])->name('N.upC');
Route::post('/sign-in-processing', [AuthController::class, 'login'])->name('N.inP');

Route::middleware(['auth:web'])->group(function () {
    // Routes accessible to regular users
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/babagram-as-administrator', [FirstController::class, 'index'])->name('A.Fi');
    Route::resource('/babagram-as-administrator/displays-the-user-table', TuController::class);
    Route::resource('/babagram-as-administrator/displays-the-kategori-table', TkController::class);
});
