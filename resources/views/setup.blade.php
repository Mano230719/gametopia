@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- Sidebar -->
        <x-setup.setup-sidebar></x-setup.setup-sidebar>

        <!-- Main Content -->
        <main class="w-5/6">
            <!-- Sub-navigation Menu -->
            <x-setup.setup-nav></x-setup.setup-nav>

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
        </main>
    </div>
@endsection
