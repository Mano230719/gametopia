<div
    class="bg-gray-800 rounded-lg shadow-md transition-transform hover:shadow-lg hover:shadow-red-300 transform hover:-translate-y-1 hover:scale-105">
    <img class="w-full h-56 object-cover rounded-t-lg" src="https://picsum.photos/800/400" alt="Big Blog Post Image">
    <div class="p-6">
        <h3 class="text-xl text-red-500 font-bold mb-2">{{ $blog->blog_title }}</h3>
        <hr class="border-gray-600 mt-2 mb-2 w-3/4">
        <p class="text-gray-300 mb-4">{{ $blog->blog_description }}</p>
        {{-- Check if $blog->category exists --}}
        <a href="{{ route('blog.page', ['category' => $blog->blogCategory->blog_category_name, 'id' => $blog->id]) }}"
            class="inline-block px-4 py-2 rounded-xl bg-red-500 text-white transition-colors duration-300 hover:bg-red-600 hover:text-black">Read
            More</a>
    </div>
</div>
