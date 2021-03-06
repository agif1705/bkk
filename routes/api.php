<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [UserController::class, 'login']);
// Route::middleware(['auth:sanctum'])->group(function () {
// });
Route::get('/datauser', [UserController::class, 'listuser']);
Route::get('/dataacess', [UserController::class, 'listaccess']);
Route::get('/profile/{user:username}', [UserController::class, 'profile']);
Route::get('/listbooking', [BookingController::class, 'index']);