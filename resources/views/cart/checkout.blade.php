@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-10">
        <h1 class="text-3xl text-red-500 font-bold mb-6">Checkout</h1>

        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="payment_method" class="block text-lg font-semibold mb-2">Payment Method</label>
                <select name="payment_method" id="payment_method" class="w-full p-2 border border-gray-300 rounded">
                    <option value="cash">Cash Payment</option>
                    @if (Auth::user()->card_number)
                        <option value="card">Card Payment (**** **** **** {{ substr(Auth::user()->card_number, -4) }})
                        </option>
                    @endif
                </select>
            </div>

            <div class="mb-6">
                <label for="town" class="block text-lg font-semibold mb-2">Town</label>
                <input type="text" name="town" id="town" value="{{ old('town', Auth::user()->town) }}"
                    class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div class="mb-6">
                <label for="address" class="block text-lg font-semibold mb-2">Address</label>
                <input type="text" name="address" id="address" value="{{ old('address', Auth::user()->address) }}"
                    class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div class="mb-6">
                <label for="postal_code" class="block text-lg font-semibold mb-2">Postal Code</label>
                <input type="text" name="postal_code" id="postal_code"
                    value="{{ old('postal_code', Auth::user()->postal_code) }}"
                    class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <h2 class="text-2xl text-red-500 font-bold mt-8 mb-4">Order Summary</h2>
            <table class="w-full text-left mb-6">
                <thead>
                    <tr>
                        <th class="border-b-2 p-4">Product</th>
                        <th class="border-b-2 p-4">Quantity</th>
                        <th class="border-b-2 p-4">Price</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td class="border-b p-4">{{ $item->product->product_name }}</td>
                            <td class="border-b p-4">{{ $item->quantity }}</td>
                            <td class="border-b p-4">${{ number_format($item->product->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl text-red-500 font-bold">Total: ${{ number_format($total, 2) }}</h2>
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 hover:text-black text-white px-4 py-2 transition duration-300 rounded-xl">Place
                    Order</button>
            </div>
        </form>
    </div>
@endsection
