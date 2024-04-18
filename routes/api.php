<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PetitionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/petition',PetitionController::class);
Route::resource('/author',AuthorController::class)->only('index','show');
