<?php

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('shop', function () {
    return view('shop');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('setup', function () {
    return view('setup');
});

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
