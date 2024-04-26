<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\BuyerController; 
use App\Http\Controllers\SellerController; 


Route::get('/', function () {
    return view('welcome');
});

Route::resource('user',UserController::class);
Route::resource('buyer',BuyerController::class);
Route::resource('seller',SellerController::class);
