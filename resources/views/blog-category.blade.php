@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        {{-- Sidebar for Categories --}}
        <x-blog.blog-sidebar></x-blog.blog-sidebar>

        {{-- Main Content --}}
        <main class="w-5/6 p-16">
            <!-- Blog Sub-navigation -->
            <x-blog.blog-nav></x-blog.blog-nav>

            {{-- Category Title --}}
            @php
                $categoryName = str_replace('-', ' ', $blogCategory->blog_category_name);
                $formattedCategoryName = ucwords($categoryName);
            @endphp
            <div
                class="inline-flex items-start bg-red-500 rounded-full py-2 px-4 mt-6 mb-6 mx-18 border border-red-700 shadow-2xl border-b-4">

                <h2 class="text-2xl font-bold text-white">{{ $formattedCategoryName }}</h2>
            </div>
            <hr class="ml-18 mb-12 w-1/3 border-t border-red-500">

            {{-- Blog Cards Grid --}}
            <div class="grid grid-cols-3 gap-8 mb-8">
                {{-- Iterate through blog posts --}}
                @foreach ($blogs as $blog)
                    <x-blog.medium-blog-card :blog="$blog"></x-blog.medium-blog-card>
                @endforeach
            </div>
        </main>
    </div>
@endsection
