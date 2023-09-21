<?php

use App\Http\Controllers\AuthenticationCotroller;
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

Route::post('login',[AuthenticationCotroller::class,'login']);
Route::post('register',[AuthenticationCotroller::class,'register']);

Route::apiResource('appartment',\App\Http\Controllers\AppartmentController::class)->middleware('auth:api');


Route::post('logout',[AuthenticationCotroller::class,'logout'])->middleware('auth:api');
