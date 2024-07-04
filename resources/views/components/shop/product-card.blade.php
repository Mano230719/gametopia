<div
    class="col-span-1 max-w-xs rounded-2xl overflow-hidden shadow-lg bg-gray-800 transition-transform transform hover:scale-105 hover:shadow-red-200">
    <a href="#">
        <img src="{{ $product->product_image }}" alt="Product Image" class="w-full h-56 object-cover">
    </a>
    <div class="px-4 py-2">
        <div>
            <a href="#">
                <h3 class="font-bold text-lg text-red-500 hover:text-red-600 mb-1">{{ $product->product_name }}</h3>
            </a>
            <p class="text-gray-300 text-sm mb-2">
                {{ $product->product_description }}
            </p>
        </div>
        <hr class="border-gray-600 my-2">
        <div class="flex justify-between items-center">
            {{-- <p>{{ $product->id }}</p> --}}
            <p class="text-red-500 font-bold text-md">${{ number_format($product->price, 2) }}</p>
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="quantity" value="1" min="1">
                <button
                    class="text-white bg-red-500 hover:bg-red-600 hover:text-black px-3 py-1 rounded-xl transition duration-300"
                    type="submit">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
