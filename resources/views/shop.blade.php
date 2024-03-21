@extends('layouts.app')

@section('content')
    <div class="flex">
        <!-- Sidebar -->
        <x-shop-sidebar></x-shop-sidebar>

        <!-- Main Content -->
        <div class="flex-grow p-4">
            <!-- Top Section -->
            <x-shop-nav></x-shop-nav>

            <!-- Product Category Carousel -->
            <div class="swiper-container mt-12 mb-6 mx-14">
                <div class="swiper-wrapper">
                    <!-- PC Games Slide -->
                    <div class="swiper-slide">
                        <!-- PC Games Highlights Section -->
                        <div class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-desktop text-2xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">PC Games Highlights</h2>
                        </div>
                        <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
                        <!-- Product Cards for PC Games Highlights -->
                        <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                            <!-- Product Card -->
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
                    </div>

                    <!-- PC Components Slide -->
                    <div class="swiper-slide">
                        <!-- PC Components Highlights Section -->
                        <div class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-microchip text-2xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">PC Components Highlights</h2>
                        </div>
                        <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
                        <!-- Product Cards for PC Components Highlights -->
                        <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                            <!-- Product Card -->
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
                    </div>

                    <!-- Console Games Slide -->
                    <div class="swiper-slide">
                        <!-- Console Games Highlights Section -->
                        <div class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-gamepad text-2xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">Console Games Highlights</h2>
                        </div>
                        <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
                        <!-- Product Cards for Console Games Highlights -->
                        <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                            <!-- Product Card -->
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
                    </div>

                    <!-- Board Games Slide -->
                    <div class="swiper-slide">
                        <!-- Board Games Highlights Section -->
                        <div class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                            <i class="fas fa-puzzle-piece text-xl text-white mr-2 mt-1"></i>
                            <h2 class="text-2xl font-bold text-white">Board Games Highlights</h2>
                        </div>
                        <hr class="mb-8 ml-14 w-2/3 border-t border-red-500">
                        <!-- Product Cards for Board Games Highlights -->
                        <div class="grid grid-cols-5 gap-8 mb-6 px-14">
                            <!-- Product Card -->
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
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (index + 1) + '</span>';
                    },
                    },
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
        </div>
    </div>
@endsection
