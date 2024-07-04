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
                @if ($blogs->isNotEmpty())
                    <x-blog.big-blog-card :blog="$blogs->first()"></x-blog.big-blog-card>
                @endif
                {{-- Medium-sized Blog Cards --}}
                <div class="grid grid-cols-2 gap-8">
                    @foreach ($blogs->skip(1)->take(2) as $blog)
                        <x-blog.medium-blog-card :blog="$blog"></x-blog.medium-blog-card>
                    @endforeach
                </div>

                {{-- Small Blog Cards --}}
                <div class="grid grid-cols-3 gap-8">
                    @foreach ($blogs->skip(3)->take(3) as $blog)
                        <x-blog.small-blog-card :blog="$blog"></x-blog.small-blog-card>
                    @endforeach
                </div>
            </div>
        </main>
    </div>
@endsection
