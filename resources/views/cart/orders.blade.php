@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-10">
        <h1 class="text-2xl font-bold mb-6">My Orders</h1>

        @if ($orders->isEmpty())
            <p class="text-lg">You have no orders.</p>
        @else
            @foreach ($orders as $order)
                <div class="mb-6">
                    <h2 class="text-xl font-bold">Order #{{ $order->id }} - {{ $order->order_date }}</h2>
                    <p class="mb-2">Status: {{ ucfirst($order->status) }}</p>
                    <p class="mb-2">Total: ${{ number_format($order->total_amount, 2) }}</p>
                    <p class="mb-4">Payment Method: {{ ucfirst($order->payment_method) }}</p>
                    <table class="w-full text-left mb-4">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-4">Product</th>
                                <th class="border-b-2 p-4">Quantity</th>
                                <th class="border-b-2 p-4">Price</th>
                                <th class="border-b-2 p-4">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b p-4">{{ $order->product->product_name }}</td>
                                <td class="border-b p-4">{{ $order->order_quantity }}</td>
                                <td class="border-b p-4">${{ number_format($order->product->price, 2) }}</td>
                                <td class="border-b p-4">
                                    {{ number_format($order->product->price * $order->order_quantity, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        @endif
    </div>
@endsection
