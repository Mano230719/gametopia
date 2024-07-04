<aside class="bg-gray-800 text-white w-1/6 flex-shrink-0">
    <!-- Sidebar Content -->
    <div class="mt-6 p-4">
        <!-- Title Section -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-comments text-xl text-red-500 mr-2"></i>
            <div>
                <h1 class="font-bold text-xl">Blog Topics</h1>
            </div>
        </div>

        <hr class="my-4 border-gray-700">

        <!-- Search Bar -->
        <div class="mb-4 flex items-center">
            <i class="fas fa-search text-xl text-red-500 ml-2 mr-3"></i>
            <input type="text" placeholder="Search..." class="w-full p-2 bg-gray-700 text-white rounded">
        </div>

        <!-- Links -->
        <ul>
            <li class="my-4">
                <a href="{{ route('blog.category', 'pc-games') }}"
                    class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                    <i class="fas fa-desktop text-xl text-red-500 mr-2 group-hover:text-black"></i>
                    PC Games
                </a>
            </li>
            <li class="my-4">
                <a href="{{ route('blog.category', 'pc-components') }}"
                    class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                    <i class="fas fa-microchip text-xl text-red-500 mr-2 group-hover:text-black"></i>
                    PC Components
                </a>
            </li>
            <li class="my-4">
                <a href="{{ route('blog.category', 'console-games') }}"
                    class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                    <i class="fas fa-gamepad text-xl text-red-500 mr-2 group-hover:text-black"></i>
                    Console Games
                </a>
            </li>
            <li class="my-4">
                <a href="{{ route('blog.category', 'boardgames') }}"
                    class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                    <i class="fas fa-puzzle-piece text-xl text-red-500 mr-2 group-hover:text-black"></i>
                    Board Games
                </a>
            </li>
        </ul>
    </div>
</aside>
