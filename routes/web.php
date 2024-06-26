<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FetchUser;
use Illuminate\Support\Facades\Route;
use App\Models\Product;


Route::group(['prefix' => '/'], function () {

    Route::get('/', function () {
        $products = Product::all();
        return view('main.sections.main', ['products' => $products]);
    })->name('main.home');

    Route::get('/products', [ProductController::class, 'index'])->name('main.products');
    Route::get('/product/{id}', [ProductController::class, 'showSingleProductPage'])->name('product.single.page');
    
    Route::get('/checkout', [ProductController::class, 'checkoutPage'])->name('product.checkout.page');
    
    Route::post('/checkout', [OrderController::class, 'store'])->name('product.checkout.store');
    Route::post('/updateStatus/{id}', [OrderController::class, 'UpdateOrderStatus'])->name('product.UpdateOrderStatus.page');
    Route::get('/printInvoice/{id}', [OrderController::class, 'printInvoice'])->name('product.printInvoice.page');
        

    Route::get('/contact', function(){return view('main.sections.contact_us');})->name('main.contact');
    Route::get('/about', function(){return view('main.sections.about_us');})->name('main.about');
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

            Route::get('/edit/{id}', [ProductController::class, 'editPage'])->name('admin.products.edit');

            Route::put('/edit/{id}', [ProductController::class, 'update'])->name('admin.products.update');

            Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
        });

        Route::group(['prefix' => 'orders'], function () {

            Route::get('/', function () {
                return view('admin.order.order');
            })->name('main.admin.userOrder');

            Route::get('/Show', [OrderController::class, 'navigaetToOrderShow'])->name('main.admin.userOrderShow');

            Route::get('/orderUpdatePage/{id}', [OrderController::class, 'OrderUpdateShowPage'])->name('main.admin.OrderUpdateShowPage');
            Route::post('/updateOrder', [OrderController::class, 'UpdateOrder'])->name('main.admin.UpdateOrder');

        });
        
    });
});

require __DIR__ . '/auth.php';
