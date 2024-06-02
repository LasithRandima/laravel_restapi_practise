<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PetitionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/petitions', [PetitionController::class, 'index']);
// Route::post('/petitions', [PetitionController::class, 'store']);

// api resource routes for petitions
Route::apiResource('/petitions', PetitionController::class);

// selection only methods you want
// Route::Resource('petitions', PetitionController::class)->only(['index', 'store']);


// Author api routes
Route::resource('/authors', AuthorController::class)->only(['index', 'show']);
