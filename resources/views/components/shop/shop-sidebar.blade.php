        <aside class="bg-gray-800 text-white w-1/6 h-auto z-20">
            <!-- Sidebar Content -->
            <div class="mt-6 p-4">
                <!-- Title Section -->
                <div class="flex items-center mb-4">
                    <i class="fas fa-globe text-xl text-red-500 mr-2"></i>
                    <div>
                        <h1 class="font-bold text-xl">Products Section</h1>
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
                        <a href="{{ route('shop.category', 'pc-games') }}"
                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                            <i class="fas fa-desktop text-xl text-red-500 mr-2 group-hover:text-black"></i>
                            PC Games
                        </a>
                    </li>
                    <li class="my-4">
                        <!-- Dropdown Menu for PC Components Section -->
                        <div x-data="{ open: false }">
                            <div @click="open = !open"
                                class="block font-semibold cursor-pointer hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                <i class="fas fa-microchip text-xl text-red-500 mr-2 group-hover:text-black"></i>
                                PC Components
                                <i :class="{ 'fas fa-chevron-down': !open, 'fas fa-chevron-up': open }"
                                    class="ml-2"></i>
                            </div>
                            <div x-show="open" class="ml-8">
                                <ul>
                                    <li>
                                        <a href="{{ route('shop.subcategory', ['pc-components', 'motherboards']) }}"
                                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                            <i
                                                class="fa-solid fa-plug text-l text-red-500 group-hover:text-black mr-2"></i>
                                            Motherboards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop.subcategory', ['pc-components', 'graphics-cards']) }}"
                                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                            <i
                                                class="fa-regular fa-hard-drive text-l text-red-500 group-hover:text-black mr-2"></i>
                                            Graphics Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop.subcategory', ['pc-components', 'processors']) }}"
                                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                            <i
                                                class="fa-solid fa-sd-card text-l text-red-500 group-hover:text-black mr-3"></i>
                                            Processors
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop.subcategory', ['pc-components', 'ram']) }}"
                                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                            <i
                                                class="fa-solid fa-memory text-l text-red-500 group-hover:text-black mr-2"></i>
                                            RAM
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="my-4">
                        <!-- Dropdown Menu for Console Games Section -->
                        <div x-data="{ open: false }">
                            <div @click="open = !open"
                                class="block font-semibold cursor-pointer hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                <i class="fas fa-gamepad text-xl text-red-500 mr-1 group-hover:text-black"></i>
                                Console Games
                                <i :class="{ 'fas fa-chevron-down': !open, 'fas fa-chevron-up': open }"
                                    class="ml-2"></i>
                            </div>
                            <div x-show="open" class="ml-8">
                                <ul>
                                    <li>
                                        <a href="{{ route('shop.subcategory', ['console-games', 'playstation']) }}"
                                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                            <i
                                                class="fa-brands fa-playstation text-l text-red-500 group-hover:text-black mr-2"></i>
                                            PlayStation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop.subcategory', ['console-games', 'xbox']) }}"
                                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                                            <i
                                                class="fa-brands fa-xbox text-l text-red-500 group-hover:text-black mr-3"></i>
                                            Xbox
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="my-4">
                        <a href="{{ route('shop.category', 'boardgames') }}"
                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                            <i class="fas fa-puzzle-piece text-xl text-red-500 mr-2 group-hover:text-black"></i>
                            Board Games
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="{{ route('cart.index') }}"
                            class="block font-semibold hover:bg-red-500 hover:text-black rounded-xl p-2 group transition duration-300">
                            <i class="fas fa-shopping-cart text-xl text-red-500 mr-2 group-hover:text-black"></i>
                            My Cart
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
