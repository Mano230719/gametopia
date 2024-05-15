@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <!-- Sidebar -->
        <x-shop.shop-sidebar></x-shop.shop-sidebar>

        <!-- Main Content -->
        <main class="w-5/6 p-4">
            <!-- Category Page Content -->
            <h1>{{ $category->category_name }}</h1>
            <!-- Display category-specific products -->
            <div class="grid grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <div>{{ $product->product_name }}</div>
                    <!-- Add more product details as needed -->
                @endforeach
            </div>
            <!-- Pagination Component -->
            <!-- Add pagination component here -->
        </main>
    </div>
@endsection
