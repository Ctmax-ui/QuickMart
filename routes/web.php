<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FetchUser;
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

    Route::post('/product/{id}',[ProfileController::class,'addToCart'])->name('add.to.cart');
    Route::delete('/delete-cart-products',[ProfileController::class,'deleteItemsInCart'])->name('delete.cart.product');
});
Route::get('/shopping-cart',[ProfileController::class,'itemscart'])->name('items.shopping-cart');



Route::middleware(['auth','isAdmin'])->group(function () {

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::get('/', function () {
            return view('admin.admin');
        })->name('admin.admin');

        Route::get('/usersDetails', [FetchUser::class,'index'])->name('admin.usersDetails');
        Route::post('/update-admin-status', [FetchUser::class, 'updateAdminStatus'])->name('update.admin.status');

        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');


        Route::group(['prefix' => 'products'], function () {

            Route::get('/', function () {
                return view('admin.products');
            })->name('main.admin.products');

            Route::get('/add', [ProductController::class, 'showCatagory'])->name('admin.productsAdd');
            Route::get('/show', [ProductController::class, 'showProductLists'])->name('admin.productShow');

            Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
        });
    });
});

require __DIR__ . '/auth.php';
