@extends('layouts.auth')

@section('content')
    <!-- Logo and Title -->
    <div class="flex flex-col items-center my-8">
        <img src="{{ asset('images/logo.png') }}" alt="Gametopia Logo" class="w-16 h-16">
        <h1 class="text-3xl text-red-500 font-bold mb-1">Gametopia</h1>
    </div>

    <!-- Registration Form -->
    <div class="flex justify-center">
        <form class="w-1/3 bg-gray-800 shadow-xl rounded-xl px-8 pt-6 pb-8 mb-4" action="{{ route('register') }}"
            method="POST">
            @csrf
            <h2
                class="text-center text-white text-2xl font-bold py-2 px-4 rounded-xl mb-8 bg-red-500 border border-red-700 shadow-2xl border-b-4">
                Registration Form
            </h2>
            <hr class="border-gray-600 mb-8">
            <div class="mb-10 flex items-center justify-center">
                <label class="block text-red-600 font-bold mr-2 pr-9 text-center" for="name">Name:</label>
                <input
                    class="shadow-inner appearance-none rounded-lg  w-full py-2 px-3 bg-gray-700 text-white leading-tight text-center"
                    id="name" name="name" type="text" placeholder="John Doe">
            </div>
            <div class="mb-10 flex items-center justify-center">
                <label class="block text-red-600 font-bold mr-2 pr-9 text-center" for="email">Email:</label>
                <input
                    class="shadow-inner appearance-none rounded-lg w-full py-2 px-3 bg-gray-700 text-white leading-tight text-center"
                    id="email" name="email" type="email" placeholder="john.doe@gmail.com">
            </div>
            <div class="mb-6 flex items-center justify-center">
                <label class="block text-red-600 font-bold mr-2 pr-1 text-center" for="password">Password:</label>
                <input
                    class="shadow-inner appearance-none rounded-lg w-full py-2 px-3 bg-gray-700 text-white leading-tight text-center @error('password') border-red-500 @enderror"
                    id="password" name="password" type="password" placeholder="********">
            </div>
            @error('password')
                <p class="text-red-500 text-sm italic">{{ $message }}</p>
            @enderror
            <div id="password-requirements" class="hidden mb-2">
                <ul class="list-disc list-inside text-red-500 text-sm italic">
                    <li>Password must contain at least one uppercase letter</li>
                    <li>Password must contain at least two digits</li>
                    <li>Password must be at least 8 characters long</li>
                </ul>
            </div>
            <hr class="border-gray-600 mt-8 mb-6">
            <div class="flex items-center justify-between mt-8">
                <a href="/"
                    class="bg-red-500 hover:bg-red-600 hover:text-black text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                    Go Back
                </a>
                <button
                    class="bg-red-500 hover:bg-red-600 hover:text-black text-white font-bold py-2 px-4 rounded-xl transition duration-300"
                    type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>

    <!-- Password Requirements Hide/Show Script -->
    <script>
        document.getElementById('password').addEventListener('focus', function() {
            document.getElementById('password-requirements').classList.remove('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!event.target.matches('#password')) {
                document.getElementById('password-requirements').classList.add('hidden');
            }
        });
    </script>
@endsection
