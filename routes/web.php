<?php

use App\Http\Controllers\VoteController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'index']);
Route::get('/content', [ContentController::class, 'index']);
Route::get('/content/create', [ContentController::class, 'create']);
Route::get('/content/{id}/edit', [ContentController::class, 'edit']);

Route::post('/content', [ContentController::class, 'store']);

Route::put('/content/{id}', [ContentController::class, 'update']);

Route::delete('/content/{id}', [ContentController::class, 'destroy']);

Route::post('/vote/{id}/like',[VoteController::class,'like']);

Route::post('/vote/{id}/dislike',[VoteController::class,'dislike']);

Route::get('vote/', [VoteController::class,'index']);

Route::get('/logout',[ContentController::class,'logout']);

