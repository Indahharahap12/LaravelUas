<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/siswa', [App\Http\Controllers\siswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\siswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\siswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [App\Http\Controllers\siswaController::class, 'edit']);
Route::patch('/siswa/{id}', [App\Http\Controllers\siswaController::class, 'update']);
Route::delete('/siswa/{id}', [App\Http\Controllers\siswaController::class, 'destroy']);

Route::get('/ortu', [App\Http\Controllers\ortuController::class, 'index']);
Route::get('/ortu/create', [App\Http\Controllers\ortuController::class, 'create']);
Route::post('/ortu', [App\Http\Controllers\ortuController::class, 'store']);
Route::get('/ortu/edit/{id}', [App\Http\Controllers\ortuController::class, 'edit']);
Route::patch('/ortu/{id}', [App\Http\Controllers\ortuController::class, 'update']);
Route::delete('/ortu/{id}', [App\Http\Controllers\ortuController::class, 'destroy']);

Route::get('/jurusan', [App\Http\Controllers\jurusanController::class, 'index']);
Route::get('/jurusan/create', [App\Http\Controllers\jurusanController::class, 'create']);
Route::post('/jurusan', [App\Http\Controllers\jurusanController::class, 'store']);
Route::get('/jurusan/edit/{id}', [App\Http\Controllers\jurusanController::class, 'edit']);
Route::patch('/jurusan/{id}', [App\Http\Controllers\jurusanController::class, 'update']);
Route::delete('/jurusan/{id}', [App\Http\Controllers\jurusanController::class, 'destroy']);