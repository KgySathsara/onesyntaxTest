<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\websites\websitescontroller;
use App\Http\Controllers\Auth\UserLoginController;


Route::post('website',[websitescontroller::class,'index']);

Route::post('login', [UserLoginController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
