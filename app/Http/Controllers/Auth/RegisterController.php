<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle the registration process
    public function register(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*?[A-Z])(?=.*?\d{2,})/',
            ],
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter and at least two digits.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('register')
                            ->withErrors($validator)
                            ->withInput();
        }

        // Create a new user record
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Log the user in
        Auth::login($user);

        // Redirect after successful registration
        return redirect('/');
    }
}