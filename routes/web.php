<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\InmueblesController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});

/* Propietarios */
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('propietarios/create', [OwnerController::class, 'create'])->name('propietarios.create');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('propietarios/index', [OwnerController::class, 'index'])->name('propietarios.index');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('propietarios/{owner}/edit', [OwnerController::class, 'edit'])->name('propietarios.edit');
});
/* fin */

/* Colaboradores */
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('colaboradores/index', [ColaboradorController::class, 'index'])->name('colaboradores.index');
});

/* Inmuebles */
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('inmuebles/index', [InmueblesController::class, 'index'])->name('inmuebles.index');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('inmuebles/create', [InmueblesController::class, 'create'])->name('inmuebles.create');
});