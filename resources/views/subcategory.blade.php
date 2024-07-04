@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- Sidebar -->
        <x-shop.shop-sidebar></x-shop.shop-sidebar>

        <!-- Main Content -->
        <main class="w-5/6 p-4">
            <!-- Subcategory Page Content -->
            @php
                $formattedCategoryName = ucwords(str_replace('-', ' ', $category->category_name));
                $formattedSubcategoryName = ucwords(str_replace('-', ' ', $subcategory->sub_category_name));
            @endphp
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-12 mb-6 mx-36 border border-red-700 shadow-2xl border-b-4">

                <h2 class="text-2xl font-bold text-white">{{ $formattedCategoryName }} - {{ $formattedSubcategoryName }}</h2>
            </div>
            <hr class="ml-36 mb-2 w-1/3 border-t border-red-500">
            <!-- Display subcategory-specific products -->
            <div class="grid grid-cols-4 gap-8 mx-36 my-16">
                @foreach ($products as $product)
                    <x-shop.product-card :product="$product"></x-shop.product-card>
                @endforeach
            </div>
        </main>
    </div>
@endsection
