@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-52">
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-6 mb-6"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- User Account Section -->
        <div class="flex items-center justify-between my-16 rounded-3xl bg-white shadow-full px-6 py-8">
            <div>
                <div
                    class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mb-8 border border-red-700 shadow-2xl border-b-4">
                    <i class="fas fa-user text-2xl text-white mr-2 mt-1"></i>
                    <h2 class="text-2xl font-semibold text-white">User Account</h2>
                </div>
                <hr class="ml-2 mb-8 w-6/7 border-t border-red-500">
                <!-- Name -->
                <div class="mb-6 ml-10">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                    <input type="text" id="name" name="name"
                        class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2 focus:border-red-600 focus:outline-none"
                        value="{{ auth()->user()->name }}" disabled>
                    <button
                        class="bg-red-500 text-white hover:bg-red-600 hover:text-black transition duration-300 font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Change</button>
                </div>
                <!-- Email -->
                <div class="mb-6 ml-10">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                    <input type="email" id="email" name="email"
                        class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2 focus:border-red-600 focus:outline-none"
                        value="{{ auth()->user()->email }}" disabled>
                    <button
                        class="bg-red-500 text-white hover:bg-red-600 hover:text-black transition duration-300 font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Change</button>
                </div>
                <!-- Password -->
                <div class="mb-6 ml-10">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password:</label>
                    <input type="password" id="password" name="password"
                        class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2 focus:border-red-600 focus:outline-none"
                        value="********" disabled>
                    <button
                        class="bg-red-500 text-white hover:bg-red-600 hover:text-black transition duration-300 font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Change</button>
                </div>
            </div>
            <div class="mr-2">
                <img src="{{ asset('images/user.png') }}" alt="User Image" class="w-4/5">
            </div>
        </div>

        <!-- Location Information Section -->
        <div class="flex items-center justify-between my-16 rounded-3xl bg-white shadow-full px-6 py-8">
            <div>
                <div
                    class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mb-8 border border-red-700 shadow-2xl border-b-4">
                    <i class="fas fa-map-marker-alt text-2xl text-white mr-2 mt-1"></i>
                    <h2 class="text-2xl font-semibold text-white">Location Information</h2>
                </div>
                <hr class="ml-2 mb-8 w-6/7 border-t border-red-500">
                <!-- Town -->
                <div id="town_section" class="mb-6 ml-10">
                    <label for="town" class="block text-gray-700 font-semibold mb-2">Town:</label>
                    <form action="{{ route('profile.addOrUpdateTown') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="town" name="town"
                            class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2"
                            value="{{ auth()->user()->town ?? '' }}">
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Save</button>
                    </form>
                </div>
                <!-- Address -->
                <div id="address_section" class="mb-6 ml-10">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Address:</label>
                    <form action="{{ route('profile.addOrUpdateAddress') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="address" name="address"
                            class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2"
                            value="{{ auth()->user()->address ?? '' }}">
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Save</button>
                    </form>
                </div>
                <!-- Postal Code -->
                <div id="postal_code_section" class="mb-6 ml-10">
                    <label for="postal_code" class="block text-gray-700 font-semibold mb-2">Postal Code:</label>
                    <form action="{{ route('profile.addOrUpdatePostalCode') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="postal_code" name="postal_code"
                            class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2"
                            value="{{ auth()->user()->postal_code ?? '' }}">
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Save</button>
                    </form>
                </div>
            </div>
            <div class="mr-2">
                <img src="{{ asset('images/location.png') }}" alt="User Image" class="w-4/5">
            </div>
        </div>

        <!-- Card Information Section -->
        <div class="flex items-center justify-between my-16 rounded-3xl bg-white shadow-full px-6 py-8">
            <div>
                <div
                    class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mb-8 border border-red-700 shadow-2xl border-b-4">
                    <i class="fas fa-credit-card text-2xl text-white mr-2 mt-1"></i>
                    <h2 class="text-2xl font-semibold text-white">Card Information</h2>
                </div>
                <hr class="ml-2 mb-8 w-6/7 border-t border-red-500">
                <!-- Card Number -->
                <div id="card_number_section" class="mb-6 ml-10">
                    <label for="card_number" class="block text-gray-700 font-semibold mb-2">Card Number:</label>
                    <form action="{{ route('profile.addOrUpdateCardNumber') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="card_number" name="card_number"
                            class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2"
                            value="{{ auth()->user()->card_number ?? '' }}">
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Save</button>
                    </form>
                </div>
                <!-- Card Expiration Date -->
                <div id="card_expiry_section" class="mb-6 ml-10">
                    <label for="card_expiry" class="block text-gray-700 font-semibold mb-2">Card Expiration Date:</label>
                    <form action="{{ route('profile.addOrUpdateCardExpiry') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="card_expiry" name="card_expiry" placeholder="MM/YY"
                            pattern="\d{2}\/\d{2}"
                            title="Please enter a valid expiration date in MM/YY format (e.g., 12/23)"
                            class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2"
                            value="{{ auth()->user()->card_expiry ?? '' }}">
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Save</button>
                    </form>
                </div>
                <!-- CVC -->
                <div id="cvc_section" class="mb-6 ml-10">
                    <label for="cvc" class="block text-gray-700 font-semibold mb-2">CVC:</label>
                    <form action="{{ route('profile.addOrUpdateCVC') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="cvc" name="cvc"
                            class="w-72 bg-gray-100 border border-gray-300 rounded-md px-4 py-2"
                            value="{{ auth()->user()->cvc ?? '' }}">
                        <button type="submit"
                            class="bg-red-500 text-white font-semibold px-4 py-2 rounded-xl mt-2 ml-3">Save</button>
                    </form>
                </div>
            </div>
            <div class="mr-2">
                <img src="{{ asset('images/credit-card.png') }}" alt="User Image" class="w-4/5">
            </div>
        </div>
    </div>

    @if (session('scroll_to_section'))
        <script>
            document.getElementById("{{ session('scroll_to_section') }}").scrollIntoView({
                behavior: 'smooth'
            });
        </script>
    @endif
@endsection
