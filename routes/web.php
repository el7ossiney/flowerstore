<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ShopController;
use Illuminate\Support\Facades\Route;




Route::get('/',[HomeController::class,'index'])->name('web.home');
Route::get('/product/{slug}',[HomeController::class,'show'])->name('web.show');
Route::get('/about-us',[HomeController::class,'about'])->name('web.aboutas');
Route::get('/shop',[ShopController::class,'shop'])->name('web.shop');


require __DIR__ . "/auth.php";
