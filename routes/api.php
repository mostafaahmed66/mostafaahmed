<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('product',[ProductController::class,'index']);
Route::post('product',[ProductController::class,'store']);
Route::get('product/{id}',[ProductController::class,'show']);
Route::delete('product/{id}',[ProductController::class,'destroy']);
Route::put('product/{id}',[ProductController::class,'edit']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});