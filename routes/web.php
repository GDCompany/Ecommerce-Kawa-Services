<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\{
    AboutController,
    BlogController,
    CartController,
    CheckoutController,
    ContactController,
    ServiceController,
    ShopController,
    ThankYouController,
    WelcomeController,
    IndexController
};
use App\Http\Controllers\Admin\{
    DashboardController,
    AlluserController,
    SubscribersController
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Font Complet
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/thankyou', [ThankYouController::class, 'index'])->name('thankyou');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


// Route::post('/admin/users/store', [UserController::class, 'createAdmin'])->name('admin.users.store');
// Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/subscribers', [SubscribersController::class, 'index'])->name('subscribers');



// Route::post('admin/create', [UserController::class, 'createAdmin'])->name('admin.store');

//user all

Route::post('admin/create', [UserController::class, 'createAdmin'])->name('admin.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('/admin/allUser', [AllUserController::class, 'index'])->name('AllUser');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');


// categorie 
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');



//products
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produits/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// ajout cart
Route::delete('/cart/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
