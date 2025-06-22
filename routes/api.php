<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\MahasiswaApiController;
use App\Http\Controllers\Api\DosenApiController;
use App\Http\Controllers\Api\MakulApiController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
  // Mahasiswa
  Route::post('/mahasiswa/create', [MahasiswaApiController::class, 'create']);
  Route::get('/mahasiswa/read', [MahasiswaApiController::class, 'read']);
  Route::put('/mahasiswa/update', [MahasiswaApiController::class, 'update']);
  Route::delete('/mahasiswa/delete', [MahasiswaApiController::class, 'delete']);

  // Dosen
  Route::post('/dosen/create', [DosenApiController::class, 'create']);
  Route::get('/dosen/read', [DosenApiController::class, 'read']);
  Route::put('/dosen/update', [DosenApiController::class, 'update']);
  Route::delete('/dosen/delete', [DosenApiController::class, 'delete']);

  // Makul
  Route::post('/makul/create', [MakulApiController::class, 'create']);
  Route::get('/makul/read', [MakulApiController::class, 'read']);
  Route::put('/makul/update', [MakulApiController::class, 'update']);
  Route::delete('/makul/delete', [MakulApiController::class, 'delete']);
});
