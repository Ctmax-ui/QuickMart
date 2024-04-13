<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/'], function () {

    Route::get('/', function () {
        return view('main.sections.main');
    })->name('main.home');

    Route::get('/products', [ProductController::class, 'index'])->name('main.products');

});



Route::get('/dashboard', function () {
    return view('user.userprofile');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/userprofile', function () {
        return view('user.userprofile');
    })->name("userprofile");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/profile', [ProfileController::class, 'updateAddressAndPhone'])->name('profile.updateAddrPh');
});



Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::get('/', function () {
            return view('admin.admin');
        })->name('admin.admin');    

        Route::get('/users',)->name('admin.users');


        Route::get('/products', function () {
            return view('admin.productsAdd  ');
        })->name('admin.productsAdd');

        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    });
});

require __DIR__ . '/auth.php';