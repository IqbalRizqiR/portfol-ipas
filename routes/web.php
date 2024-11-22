<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::resource("anggota", AnggotaController::class);
Route::resource("image", ImageController::class);
Route::resource("setting", SettingController::class);

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/aboutus', [HomepageController::class, 'aboutus'])->name('aboutus');
Route::get('/project', [HomepageController::class, 'project'])->name('project');
Route::get('/individual/{id}', [HomepageController::class, 'individual'])->name('individual');
