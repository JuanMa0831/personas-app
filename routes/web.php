<?php

use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::post('/comunas/store', [ComunaController::class, 'store'])->name('comunas.store');
Route::post('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');


