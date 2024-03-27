@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    {{-- Sidebar for Categories --}}
    <x-blog.blog-sidebar></x-blog.blog-sidebar>

    {{-- Main Content --}}
   <main class="w-5/6 p-16">
        <!-- Blog Sub-navigation -->
        <x-blog.blog-nav></x-blog.blog-nav>

        {{-- Blog Cards Grid --}}
        <div class="grid grid-cols-1 gap-8 mb-8">
            <!-- Big Blog Card -->
            <x-blog.big-blog-card></x-blog.big-blog-card>

            {{-- Medium-sized Blog Cards --}}
            <div class="grid grid-cols-2 gap-8">
                <!-- Medium Blog Card 1 -->
                <x-blog.medium-blog-card></x-blog.medium-blog-card>
                <!-- Medium Blog Card 2 -->
                <x-blog.medium-blog-card></x-blog.medium-blog-card>
            </div>

            {{-- Small Blog Cards --}}
            <div class="grid grid-cols-3 gap-8">
                <!-- Small Blog Card 1 -->
                <x-blog.small-blog-card></x-blog.small-blog-card>
                <!-- Small Blog Card 2 -->
                <x-blog.small-blog-card></x-blog.small-blog-card>
                <!-- Small Blog Card 3 -->
                <x-blog.small-blog-card></x-blog.small-blog-card>
            </div>
        </div>
    </main>
</div>

@endsection