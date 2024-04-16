<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

        Route::get('/users')->name('admin.users');


        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');


        Route::group(['prefix' => 'products'], function () {

            Route::get('/', function () {
                return view('admin.products');
            })->name('main.admin.products');

            Route::get('/add', [ProductController::class, 'showCatagory'])->name('admin.productsAdd');

            Route::post('/store ', [ProductController::class, 'store'])->name('products.store');
        });
    });
});

require __DIR__ . '/auth.php';
