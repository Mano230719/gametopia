<?php

use Illuminate\Support\Facades\Route;

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

// Registration Route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Illuminate\Http\Request $request) {
    // Validate the input data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    // Create a new user record
    $user = new \App\Models\User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->save();

    // Log the user in
    Auth::login($user);

    // Redirect after successful registration
    return redirect('/');
})->name('register');

// Login Route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect('/');
    } else {
        // Authentication failed...
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
})->name('login');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
});