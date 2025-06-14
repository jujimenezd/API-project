<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

# apiResource reconoce todos los metodos basicos del crud 
Route::apiResource('products', ProductController::class);