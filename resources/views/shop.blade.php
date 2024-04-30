@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- Sidebar -->
        <x-shop.shop-sidebar></x-shop.shop-sidebar>

        <!-- Main Content -->
        <main class="w-5/6 p-4">
            <!-- Top Section -->
            {{-- <x-shop.shop-nav></x-shop.shop-nav> --}}

            <!-- Product Category Carousel -->
            <div class="swiper-container mt-12 mb-6 mx-14">
                <div class="swiper-wrapper">
                    <!-- PC Games Slide -->
                    <div class="swiper-slide">
                        <!-- PC Games Highlights Section -->
                        <div
                            class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-desktop text-2xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">PC Games Highlights</h2>
                        </div>
                        <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
                        <!-- Product Cards for PC Games Highlights -->
                        <div class="grid grid-cols-5 gap-4 mb-6 px-14">
                            <!-- Product Card -->
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                        </div>
                    </div>

                    <!-- PC Components Slide -->
                    <div class="swiper-slide">
                        <!-- PC Components Highlights Section -->
                        <div
                            class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-microchip text-2xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">PC Components Highlights</h2>
                        </div>
                        <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
                        <!-- Product Cards for PC Components Highlights -->
                        <div class="grid grid-cols-5 gap-4 mb-6 px-14">
                            <!-- Product Card -->
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                        </div>
                    </div>

                    <!-- Console Games Slide -->
                    <div class="swiper-slide">
                        <!-- Console Games Highlights Section -->
                        <div
                            class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-gamepad text-2xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">Console Games Highlights</h2>
                        </div>
                        <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
                        <!-- Product Cards for Console Games Highlights -->
                        <div class="grid grid-cols-5 gap-4 mb-6 px-14">
                            <!-- Product Card -->
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                        </div>
                    </div>

                    <!-- Board Games Slide -->
                    <div class="swiper-slide">
                        <!-- Board Games Highlights Section -->
                        <div
                            class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-puzzle-piece text-xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">Board Games Highlights</h2>
                        </div>
                        <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
                        <!-- Product Cards for Board Games Highlights -->
                        <div class="grid grid-cols-5 gap-4 mb-6 px-14">
                            <!-- Product Card -->
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                            <x-shop.product-card></x-shop.product-card>
                        </div>
                    </div>
                </div>

                <!-- Carousel Navigation -->
                <div class="swiper-button-next mr-14"></div>
                <div class="swiper-button-prev ml-14"></div>
            </div>

            <!-- Initialize Swiper -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Swiper Implementation -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var swiper = new Swiper('.swiper-container', {
                        direction: 'horizontal',
                        loop: true,
                        slidesPerView: 1,
                        centeredSlides: true,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                });
            </script>

            <!-- Swiper Styling -->
            <style>
                .swiper-container {
                    position: relative;
                }

                .swiper-button-next,
                .swiper-button-prev {
                    position: absolute;
                    top: 60%;
                    transform: translateY(-50%);
                    width: 55px;
                    height: 55px;
                    color: black;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    transition: background-color 0.3s, color 0.3s;
                }

                .swiper-button-next:hover,
                .swiper-button-prev:hover {
                    color: rgb(220 38 38);
                }

                .swiper-button-next {
                    right: -85px;
                }

                .swiper-button-prev {
                    left: -85px;
                }
            </style>
        </main>
    </div>
@endsection
