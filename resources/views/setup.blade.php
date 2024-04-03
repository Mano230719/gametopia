@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- Sidebar -->
        <x-setup.setup-sidebar></x-setup.setup-sidebar>

        <!-- Main Content -->
        <main class="w-5/6">
            <!-- Sub-navigation Menu -->
            <x-setup.setup-nav></x-setup.setup-nav>

            <!-- Swiper Container -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Gaming Setups Slide -->
                    <div class="swiper-slide p-16">
                        <!-- Gaming Setups Section -->
                        <div class="mb-8">
                            <!-- Category Title -->
                            <div
                                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                                <i class="fa-solid fa-gamepad text-2xl text-white mr-2 mt-1"></i>
                                <h2 class="text-2xl font-bold text-white">Gaming Setups</h2>
                            </div>
                            <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
                            <!-- Setup Cards Grid -->
                            <div class="grid grid-cols-3 gap-8 mb-6 px-16">
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                            </div>
                        </div>
                    </div>

                    <!-- Home Office Setups Slide -->
                    <div class="swiper-slide p-16">
                        <!-- Home Office Setups Section -->
                        <div class="mb-8">
                            <!-- Category Title -->
                            <div
                                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                                <i class="fa-solid fa-house text-2xl text-white mr-2 mt-1"></i>
                                <h2 class="text-2xl font-bold text-white">Home Office Setups</h2>
                            </div>
                            <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
                            <!-- Setup Cards Grid -->
                            <div class="grid grid-cols-3 gap-8 mb-6 px-16">
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                            </div>
                        </div>
                    </div>

                    <!-- Content Creation Setups Slide -->
                    <div class="swiper-slide p-16">
                        <!-- Content Creation Setups Section -->
                        <div class="mb-8">
                            <!-- Category Title -->
                            <div
                                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                                <i class="fa-solid fa-paint-brush text-2xl text-white mr-2 mt-1"></i>
                                <h2 class="text-2xl font-bold text-white">Content Creation Setups</h2>
                            </div>
                            <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
                            <!-- Setup Cards Grid -->
                            <div class="grid grid-cols-3 gap-8 mb-6 px-16">
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                            </div>
                        </div>
                    </div>

                    <!-- Minimalist Setups Slide -->
                    <div class="swiper-slide p-16">
                        <!-- Minimalist Setups Section -->
                        <div class="mb-8">
                            <!-- Category Title -->
                            <div
                                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-14 border border-red-700 shadow-2xl border-b-4">
                                <i class="fa-solid fa-couch text-2xl text-white mr-2 mt-1"></i>
                                <h2 class="text-2xl font-bold text-white">Minimalist Setups</h2>
                            </div>
                            <hr class="ml-14 mb-8 w-2/3 border-t border-red-500">
                            <!-- Setup Cards Grid -->
                            <div class="grid grid-cols-3 gap-8 mb-6 px-16">
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                                <x-setup.setup-card></x-setup.setup-card>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </main>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper Implementation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize Swiper
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
        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 112%;
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
            right: 20px;
        }

        .swiper-button-prev {
            left: 20rem;
        }
    </style>
@endsection
