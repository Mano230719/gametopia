@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8 mb-56 pb-72">
        <h1 class="text-3xl text-red-500 font-bold mb-4">My Cart</h1>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($cartItems->isEmpty())
            <p class="text-gray-600">Your cart is empty.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-800">
                            <th class="py-2 px-4 border-b text-white border-gray-200 text-left">Product</th>
                            <th class="py-2 px-4 border-b text-white border-gray-200 text-left">Price</th>
                            <th class="py-2 px-4 border-b text-white border-gray-200 text-left">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr class="border-b border-gray-200">
                                <td class="py-4 px-4">{{ $item->product->product_name }}</td>
                                <td class="py-4 px-4">${{ $item->product->price }}</td>
                                <td class="py-4 px-4">{{ $item->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between items-center mt-6">
                <h2 class="text-xl font-bold text-red-500">Total: ${{ number_format($total, 2) }}</h2>
                <a href="{{ route('checkout.index') }}"
                    class="bg-red-500 hover:bg-red-600 hover:text-black text-white px-6 py-3 rounded-xl transition duration-300 ease-in-out">Proceed
                    to Checkout</a>
            </div>
        @endif
    </div>
@endsection
