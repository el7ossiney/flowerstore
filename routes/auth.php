<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login.store');
});
// Route::resource('login', LoginController::class)->middleware('guest');

Route::get('/dash-home', function () {
    return view('dashboard.index');
})->middleware('auth:admin')->name('dashboard');
Route::middleware('auth:admin')->post('/logout',[LoginController::class,'destroy'])->name('logout');
Route::group(
    [
        'middleware' => 'auth:admin'
    ],
    function () {
        Route::resources([
            'brands' => BrandController::class,
            'admins' => AdminController::class,
            'categories' => CategoryController::class,
            'products' => ProductController::class
        ]);
    }
);