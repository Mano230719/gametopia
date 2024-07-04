<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = $user->cart()->with('product')->get();

        $total = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('cart.index', compact('cartItems', 'total'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $cartItem = $user->cart()->where('product_id', $product_id)->first();
        if ($cartItem) {
            // Update quantity if the product is already in the cart
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Add new product to cart
            $user->cart()->create([
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }

        // Instead of redirecting to cart, redirect back to the previous page or refresh the current page
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $cartItem = Cart::firstOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $productId],
            ['quantity' => 0]
        );
        $cartItem->increment('quantity');
        return redirect()->route('cart.index');
    }

    public function update(Request $request, $cartId)
    {
        $cartItem = Cart::findOrFail($cartId);
        $cartItem->update(['quantity' => $request->quantity]);
        return redirect()->route('cart.index');
    }

    public function remove($cartId)
    {
        $cartItem = Cart::findOrFail($cartId);
        $cartItem->delete();
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $cartItems = auth()->user()->cart()->with('product')->get();
        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        return view('cart.checkout', compact('cartItems', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $cartItems = auth()->user()->cart()->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        DB::beginTransaction();

        try {
            $totalAmount = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
            $paymentMethod = $request->input('payment_method');

            foreach ($cartItems as $item) {
                Order::create([
                    'user_id' => auth()->id(),
                    'order_date' => now(),
                    'total_amount' => $totalAmount,
                    'status' => $paymentMethod === 'cash' ? 'pending' : 'paid',
                    'product_id' => $item->product_id,
                    'order_quantity' => $item->quantity,
                ]);
            }

            // Clear the cart
            Cart::where('user_id', auth()->id())->delete();

            DB::commit();

            return redirect()->route('cart.index')->with('success', 'Order placed successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('cart.index')->with('error', 'Failed to place the order. Please try again.');
        }
    }
}
