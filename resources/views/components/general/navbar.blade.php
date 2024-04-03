<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo and Name on the left -->
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Gametopia Logo" class="w-10 h-10 md:w-10 md:h-10 mr-2">
            <span class="text-xl text-red-500 font-bold mb-1">Gametopia</span>
            <div class="lg:flex hidden">
                <i
                    class="fas fa-gamepad text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 mx-1"></i>
                <i
                    class="fas fa-desktop text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 mx-1"></i>
                <i
                    class="fas fa-microchip text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 mx-1"></i>
                <i
                    class="fas fa-puzzle-piece text-2xl text-red-500 hover:bg-red-500 hover:text-white rounded-full p-2 mx-1"></i>
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
            <li><a href="/setup"
                    class="text-gray-300 hover:bg-red-500 hover:text-black px-4 py-2 rounded-xl font-semibold transition duration-300">PC
                    Setups</a>
            </li>
        </ul>

        <!-- Login and Register buttons on the right -->
        <div class="hidden md:flex space-x-4">
            <a href="/login"
                class="bg-red-500 hover:bg-red-600 text-white hover:text-black py-2 px-4 rounded-xl font-semibold transition duration-300">Login</a>
            <a href="/register"
                class="bg-red-500 hover:bg-red-600 text-white hover:text-black py-2 px-4 rounded-xl font-semibold transition duration-300">Register</a>
        </div>
</nav>
