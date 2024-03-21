@extends('layouts.app')

@section('content')

{{-- //TODO: Create a sidebar specific to Blogs, that shows categories --}}

{{-- //TODO: Create a sub-navigation menu specific to the Blog section --}}

<div class="flex justify-center">
    {{-- Sidebar for Categories --}}
    <aside class="w-1/6 p-4 bg-gray-800 text-white">
        <h2 class="text-lg font-bold mb-4">Categories</h2>
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <!-- Add more categories dynamically -->
            </ul>
    </aside>

    {{-- Main Content --}}
   <main class="w-5/6 p-16">
        {{-- Sub-navigation Menu --}}
        <nav class="mb-4">
            <ul class="flex">
                <li class="mr-6"><a href="#">Featured</a></li>
                <li class="mr-6"><a href="#">Recent</a></li>
            </ul>
        </nav>

        {{-- Blog Cards Grid --}}
        <div class="grid grid-cols-1 gap-8 mb-8">
            <!-- Big Blog Card -->
            <x-big-blog-card></x-big-blog-card>

            {{-- Medium-sized Blog Cards --}}
            <div class="grid grid-cols-2 gap-8">
                <!-- Medium Blog Card 1 -->
                <x-medium-blog-card></x-medium-blog-card>
                <!-- Medium Blog Card 2 -->
                <x-medium-blog-card></x-medium-blog-card>
            </div>

            {{-- Small Blog Cards --}}
            <div class="grid grid-cols-3 gap-8">
                <!-- Small Blog Card 1 -->
                <x-small-blog-card></x-small-blog-card>
                <!-- Small Blog Card 2 -->
                <x-small-blog-card></x-small-blog-card>
                <!-- Small Blog Card 3 -->
                <x-small-blog-card></x-small-blog-card>
            </div>
        </div>
    </main>
</div>

@endsection