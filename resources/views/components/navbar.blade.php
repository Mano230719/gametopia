<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo and Name on the left -->
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Gametopia Logo" class="w-10 h-10 md:w-10 md:h-10 mr-2">
            <span class="text-xl text-red-500 font-bold mb-1">Gametopia</span>
            <div class="lg:flex hidden">
                <i
                    class="fas fa-gamepad text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 cursor-pointer mx-1"></i>
                <i
                    class="fas fa-desktop text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 cursor-pointer mx-1"></i>
                <i
                    class="fas fa-microchip text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 cursor-pointer mx-1"></i>
                <i
                    class="fas fa-puzzle-piece text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 cursor-pointer mx-1"></i>
            </div>
        </div>

        <!-- Navigation Links in the center -->
        <ul class="hidden md:flex space-x-4">
            <li><a href="/"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">Home</a>
            </li>
            <li><a href="/shop"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">Shop</a>
            </li>
            <li><a href="/blog"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">Blog</a>
            </li>
            <li><a href="#"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">PC Setups</a>
            </li>
        </ul>

        <!-- Login and Register buttons on the right -->
        <div class="hidden md:flex space-x-4">
            <a href="#"
                class="bg-red-500 hover:bg-red-600 text-white hover:text-black py-2 px-4 rounded-xl font-semibold transition duration-300">Login</a>
            <a href="#"
                class="bg-red-500 hover:bg-red-600 text-white hover:text-black py-2 px-4 rounded-xl font-semibold transition duration-300">Register</a>
        </div>

        {{-- <!-- Mobile Navigation (Hamburger) -->
        <div class="md:hidden flex items-center">
            <!-- Login and Register buttons on mobile -->
            <a href="#"
                class="bg-red-500 hover:bg-red-600 text-white hover:text-black py-2 px-2 rounded-xl font-semibold transition duration-300">Login</a>
            <a href="#"
                class="bg-red-500 hover:bg-red-600 text-white hover:text-black py-2 px-2 rounded-xl font-semibold ml-2 transition duration-300">Register</a>

            <button id="mobile-menu-button"
                class="text-red-500 hover:bg-red-500 hover:text-white transition duration-300 border border-red-500 rounded-xl p-2 ml-2">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-800 text-white p-4 mx-4 mt-6 rounded-lg">
        <ul class="space-y-4">
            <li>
                <a href="/"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">
                    <i class="fas fa-chevron-right mr-3"></i>Home
                </a>
            </li>
            <li>
                <a href="/shop"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">
                    <i class="fas fa-chevron-right mr-3"></i>Shop
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">
                    <i class="fas fa-chevron-right mr-3"></i>Forum
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">
                    <i class="fas fa-chevron-right mr-3"></i>Blog
                </a>
            </li>
        </ul>
    </div> --}}
</nav>
