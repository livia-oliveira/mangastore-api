<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MangaController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mangas', [MangaController::class, 'index']);
Route::post('/mangas', [MangaController::class, 'store']);
Route::put('/mangas/{id}', [MangaController::class, 'update']);
Route::delete('/mangas/{id}', [MangaController::class, 'destroy']);
