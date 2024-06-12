<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('purchases', [PurchaseController::class, 'store']);
Route::get('trending-page', [PageController::class, 'show']);
