<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ZombigramaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request  $request) {
    return $request->user();
});


Route::get('test', function() {
    return 'succes';
});


Route::apiResource('games', GameController::class);
Route::apiResource('zombigrama', ZombigramaController::class);    
Route::apiResource('classroom', ClassroomController::class);
Route::apiResource('student', StudentController::class);


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('getuser', [AuthController::class, 'getUser']);



// Route::middleware(['cors'])->group(function () {

//  });

