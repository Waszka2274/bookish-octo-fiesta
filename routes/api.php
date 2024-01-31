<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/JurkowskiIgor/51865/People', [PeopleController::class, 'index']);
Route::get('/JurkowskiIgor/51865/People/{id}', [PeopleController::class, 'show']);
Route::post('/JurkowskiIgor/51865/People', [PeopleController::class, 'store']);
Route::put('/JurkowskiIgor/51865/People/{id}', [PeopleController::class, 'update']);
Route::delete('/JurkowskiIgor/51865/People/{id}', [PeopleController::class, 'destroy']);
