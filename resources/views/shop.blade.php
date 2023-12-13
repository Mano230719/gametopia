@extends('layouts.app')

@section('content')
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-auto h-auto flex-shrink-0">
            <!-- Sidebar Content -->
            <div class="mt-6 p-4">
                <!-- Title Section -->
                <div class="flex items-center mb-4">
                    <i class="fas fa-globe text-xl text-red-500 mr-2"></i>
                    <div>
                        <h1 class="font-bold text-xl">Products Section</h1>
                    </div>
                </div>

                <hr class="my-4 border-gray-700">

                <!-- Search Bar -->
                <div class="mb-4 flex items-center">
                    <i class="fas fa-search text-xl text-red-500 ml-2 mr-3"></i>
                    <input type="text" placeholder="Search..." class="w-full p-2 bg-gray-700 text-white rounded">
                </div>

                <!-- Links -->
                <ul>
                    <li class="my-4">
                        <a href="#" class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2">
                            <i class="fas fa-desktop text-xl text-red-500 mr-2"></i>
                            PC Games
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="#" class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2">
                            <i class="fas fa-microchip text-xl text-red-500 mr-2"></i>
                            PC Components
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="#" class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2">
                            <i class="fas fa-gamepad text-xl text-red-500 mr-1"></i>
                            Console Games
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="#" class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2">
                            <i class="fas fa-puzzle-piece text-xl text-red-500 mr-2"></i>
                            Board Games
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="#" class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2">
                            <i class="fas fa-shopping-cart text-xl text-red-500 mr-2"></i>
                            My Cart
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-4">
            <!-- Top Section -->
            <div class="flex items-center justify-center mt-8 mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Gametopia Logo" class="w-12 h-12 mr-2">
                <h1 class="text-2xl font-bold mb-2">Gametopia</h1>
            </div>

            <!-- Second Navigation -->
            <div class="flex justify-center mb-6">
                <nav class="bg-gray-800 inline-flex p-2 rounded-full">
                    <ul class="flex justify-center space-x-6">
                        <li>
                            <a href="#"
                                class="text-white font-semibold hover:bg-red-500 hover:text-black transition duration-300 rounded-full p-2">
                                PC Games
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white font-semibold hover:bg-red-500 hover:text-black transition duration-300 rounded-full p-2">
                                PC Components
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white font-semibold hover:bg-red-500 hover:text-black transition duration-300 rounded-full p-2">
                                Console Games
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white font-semibold hover:bg-red-500 hover:text-black transition duration-300 rounded-full p-2">
                                Board Games
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            {{-- TODO --}}
            {{-- Add a background image or color to the second navigation (similarly to the background of the Hero Section on the Home page) --}}
            {{-- Try to make the product highlights into a Carousel (Keyword: Card Carousel), so they fit better in the page --}}

            <!-- Product Cards -->
            <!-- PC Games Highlights Section -->
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                <i class="fas fa-desktop text-2xl text-white mr-2 mt-1"></i>
                <h2 class="text-2xl font-bold text-white">PC Games Highlights</h2>
            </div>
            <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
            <!-- Product Cards for PC Games Highlights -->
            <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                <!-- Product Card (Replicate this for each product) -->
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
            </div>
            <!-- Repeat this for other cards in the PC Games section -->

            <!-- PC Components Highlights Section -->
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                <i class="fas fa-microchip text-2xl text-white mr-2 mt-1"></i>
                <h2 class="text-2xl font-bold text-white">PC Components Highlights</h2>
            </div>
            <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
            <!-- Product Cards for PC Components Highlights -->
            <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                <!-- Product Card (Replicate this for each product) -->
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
            </div>
            <!-- Repeat this for other cards in the PC Components section -->

            <!-- Console Games Highlights Section -->
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                <i class="fas fa-gamepad text-2xl text-white mr-2 mt-1"></i>
                <h2 class="text-2xl font-bold text-white">Console Games Highlights</h2>
            </div>
            <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
            <!-- Product Cards for Console Games Highlights -->
            <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                <!-- Product Card (Replicate this for each product) -->
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
            </div>

            <!-- Board Games Highlights Section -->
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                <i class="fas fa-puzzle-piece text-xl text-white mr-2 mt-1"></i>
                <h2 class="text-2xl font-bold text-white">Board Games Highlights</h2>
            </div>
            <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
            <!-- Product Cards for Board Games Highlights -->
            <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                <!-- Product Card (Replicate this for each product) -->
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
            </div>
            <!-- You can use a loop to display multiple product cards -->
        </div>
    </div>
@endsection
