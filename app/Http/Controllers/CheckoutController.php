<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Auth::user()->cart()->with('product')->get();
        $total = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });

        return view('cart.checkout', compact('cartItems', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:cash,card',
            'town' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
        ]);

        $cartItems = Auth::user()->cart()->with('product')->get();

        foreach ($cartItems as $item) {
            $total = $item->product->price * $item->quantity;

            $order = new Order();
            $order->user_id = Auth::id();
            $order->order_date = now();
            $order->total_amount = $total;
            $order->status = 'pending';
            $order->payment_method = $request->payment_method;
            $order->town = $request->town;
            $order->address = $request->address;
            $order->postal_code = $request->postal_code;
            $order->product_id = $item->product_id;
            $order->order_quantity = $item->quantity;
            $order->save();
        }
        
        // foreach ($cartItems as $item) {
        //     $orderProduct = new OrderProduct();
        //     $orderProduct->order_id = $order->id;
        //     $orderProduct->product_id = $item->product_id;
        //     $orderProduct->quantity = $item->quantity;
        //     $orderProduct->price = $item->product->price;
        //     $orderProduct->save();
        // }

        Auth::user()->cart()->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }
}
