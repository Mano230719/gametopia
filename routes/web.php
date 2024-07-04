<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

//Shop Routes
Route::get('shop', [ShopController::class, 'showShop'])->name('shop');
Route::get('shop/{category}', [ShopController::class, 'showCategory'])->name('shop.category');
Route::get('shop/{category}/{subCategory}', [ShopController::class, 'showSubcategory'])->name('shop.subcategory');

// Blog Routes
Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog');
Route::get('/blog/{category}', [BlogController::class, 'showCategory'])->name('blog.category');
Route::get('/blog/{category}/{id}', [BlogController::class, 'showPage'])->name('blog.page');

//Comment Route
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

//Setup Routes
Route::get('/setup', [SetupController::class, 'showSetup'])->name('setup');
Route::get('/setup/{category}', [SetupController::class, 'showCategory'])->name('setup.category');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

//Profile Routes
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
//Profile Location Routes
Route::put('/profile/add-or-update-town', [ProfileController::class, 'addOrUpdateTown'])->name('profile.addOrUpdateTown');
Route::put('/profile/add-or-update-address', [ProfileController::class, 'addOrUpdateAddress'])->name('profile.addOrUpdateAddress');
Route::put('/profile/add-or-update-postal-code', [ProfileController::class, 'addOrUpdatePostalCode'])->name('profile.addOrUpdatePostalCode');
//Profile Card Routes
Route::put('/profile/add-or-update-card-number', [ProfileController::class, 'addOrUpdateCardNumber'])->name('profile.addOrUpdateCardNumber');
Route::put('/profile/add-or-update-card-expiry', [ProfileController::class, 'addOrUpdateCardExpiry'])->name('profile.addOrUpdateCardExpiry');
Route::put('/profile/add-or-update-cvc', [ProfileController::class, 'addOrUpdateCVC'])->name('profile.addOrUpdateCVC');

//Cart Routes
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});
