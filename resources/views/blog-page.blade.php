@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        {{-- Sidebar for Categories --}}
        <x-blog.blog-sidebar></x-blog.blog-sidebar>

        {{-- Main Content --}}
        <main class="w-5/6 p-16">
            {{-- Blog Page Content --}}
            <article class="w-3/4 mx-auto bg-white shadow-full rounded-2xl p-8 mb-16">
                <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">{{ $blog->blog_title }}</h1>
                <p class="text-gray-600 mb-6 text-center">{{ $blog->date }}</p>

                <div class="prose max-w-full text-justify">
                    {!! $blog->content !!}
                </div>
            </article>

            {{-- Comment Form --}}
            <div class="mt-8 w-3/4 mx-auto bg-gray-800 shadow-full rounded-2xl p-8">
                <h2 class="text-xl text-red-500 font-semibold mb-4">Add a Comment</h2>
                @guest
                    <p class="text-white mb-2">Can't comment? <a href="{{ route('login') }}"
                            class="text-red-500 hover:text-red-600">Log
                            in</a> or <a href="{{ route('register') }}" class="text-red-500 hover:text-red-600">Register</a>.
                    </p>
                @endguest
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                    <textarea name="content" rows="3" class="w-full bg-gray-600 p-2 rounded-md mb-2" placeholder="Your comment..."
                        required></textarea>
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 mt-2 rounded-xl transition duration-300">Add
                        Comment</button>
                </form>
            </div>

            {{-- Display Comments --}}
            <div class="mt-8 w-3/4 mx-auto">
                <h2 class="text-2xl text-red-500 font-semibold ml-1 mb-4">Comments</h2>
                <hr class="mb-8 ml-1 w-2/3 border-t border-red-500">
                @if ($blog->comments->isEmpty())
                    <p>No comments yet.</p>
                @else
                    @foreach ($blog->comments as $comment)
                        <div class="bg-gray-800 shadow-full rounded-2xl p-4 mb-4">
                            <div class="flex items-center mb-2">
                                <div class="font-semibold text-lg text-red-500">{{ $comment->user->name }}:</div>
                                <div class="text-gray-400 text-sm ml-2">
                                    <span>{{ $comment->date }}</span>
                                    <span class="ml-2">({{ $comment->created_at->diffForHumans() }})</span>
                                </div>
                            </div>
                            <p class="text-white">{{ $comment->content }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </main>
    </div>
@endsection
