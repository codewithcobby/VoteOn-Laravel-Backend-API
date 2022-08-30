<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AdminController::class, 'index']);
Route::post("create-admin", [AdminController::class, 'store']);
Route::get("admin/{id}", [AdminController::class, 'show']);
Route::put("admin-update/{id}", [AdminController::class, 'update']);
Route::delete('admin-destroy/{id}', [AdminController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    Route::get('/', [AdminController::class, 'index']);
    Route::post("create-admin", [AdminController::class, 'store']);
    Route::get("admin/{id}", [AdminController::class, 'show']);
    Route::put("admin-update/{id}", [AdminController::class, 'update']);
    Route::delete('admin-destroy/{id}', [AdminController::class, 'destroy']);
});

