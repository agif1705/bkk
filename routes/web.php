<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AdminPanelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'role:SuperAdmin'])->group(function () {
    Route::get('/admin', [AdminPanelController::class, 'index']);
    Route::get('/admin/{any}', [AdminPanelController::class, 'index'])->where('any','.*');
    Route::resource('/icon/icon', IconController::class);
    
});