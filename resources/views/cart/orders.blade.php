@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-10 pb-48">
        <h1 class="text-2xl text-red-500 font-bold mb-6">My Orders</h1>

        @if ($orders->isEmpty())
            <p class="text-lg">You have no orders.</p>
        @else
            @foreach ($orders as $order)
                <div class="mb-16">
                    <h2 class="text-xl font-bold mb-3">Order #{{ $order->id }} - {{ $order->order_date }}</h2>
                    <p class="mb-2"><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
                    <p class="mb-2"><strong>Total:</strong> ${{ number_format($order->total_amount, 2) }}</p>
                    <p class="mb-4"><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                    <table class="w-full text-left mb-4">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-4">Product</th>
                                <th class="border-b-2 p-4">Quantity</th>
                                <th class="border-b-2 p-4">Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderProducts as $orderProduct)
                                <tr>
                                    <td class="border-b p-4">{{ $orderProduct->product->product_name }}</td>
                                    <td class="border-b p-4">{{ $orderProduct->quantity }}</td>
                                    <td class="border-b p-4">${{ number_format($orderProduct->price, 2) }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        @endif
    </div>
@endsection
