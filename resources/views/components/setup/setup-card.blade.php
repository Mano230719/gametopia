<div
    class="bg-gray-800 shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-red-200">
    <img class="w-full h-64 object-cover object-center" src="https://picsum.photos/150/100" alt="setup image">
    <div class="p-4">
        <h3 class="text-xl text-red-500 font-bold mb-2">{{ $setup->setup_name }}</h3>
        <hr class="border-gray-600 mt-2 mb-2 w-3/4">
        <p class="text-white"><strong class="text-red-500">Motherboard:</strong> {{ $setup->motherboard }}</p>
        <p class="text-white"><strong class="text-red-500">Graphics Card:</strong> {{ $setup->graphics_card }}</p>
        <p class="text-white"><strong class="text-red-500">Processor:</strong> {{ $setup->processor }}</p>
        <p class="text-white"><strong class="text-red-500">RAM:</strong> {{ $setup->ram }}</p>
    </div>
</div>
