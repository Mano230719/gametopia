@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- Sidebar -->
        <x-setup.setup-sidebar></x-setup.setup-sidebar>

        <!-- Main Content -->
        <main class="w-5/6">
            {{-- Category Title --}}
            @php
                $categoryName = str_replace('-', ' ', $setupCategory->setup_category_name);
                $formattedCategoryName = ucwords($categoryName);
            @endphp
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-20 border border-red-700 shadow-2xl border-b-4">

                <h2 class="text-2xl font-bold text-white">{{ $formattedCategoryName }}</h2>
            </div>
            <hr class="ml-20 mb-12 w-1/3 border-t border-red-500">

            {{-- Blog Cards Grid --}}
            <div class="grid grid-cols-3 gap-8 mx-12 my-12 ">
                {{-- Iterate through blog posts --}}
                @foreach ($setups as $setup)
                    <x-setup.setup-card :setup="$setup"></x-setup.setup-card>
                @endforeach
            </div>
        </main>
    </div>
@endsection
