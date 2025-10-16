<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatakuliahController;


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

Route::get('/profile/{nama}/{npm}/{kelas}', [App\Http\Controllers\ProfileController::class, 'profile']);

Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');


Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');

Route::get('matakuliah/{id}/edit', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('matakuliah/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.destroy');

Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
