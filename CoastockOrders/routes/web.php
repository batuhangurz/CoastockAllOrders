<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/purchase',[PurchaseController::class,'GetTotalOrders']);
Route::get('/orders',[OrderController::class,'AllOrders']);



