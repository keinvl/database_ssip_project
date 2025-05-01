<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += 1;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return back();
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        $productId = $request->product_id;

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $request->quantity;

            if ($cart[$productId]['quantity'] <= 0) {
                unset($cart[$productId]);
            }

            session()->put('cart', $cart);
        }

        return back();
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->product_id]);
        session()->put('cart', $cart);

        return back();
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        $user = Auth::user();

        if (!$user || empty($cart)) {
            return back()->with('error', 'Cart empty or user not logged in.');
        }

        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        $purchase = Purchase::create([
            'user_id' => $user->id,
            'total_price' => $total,
        ]);

        foreach ($cart as $productId => $item) {
            $purchase->products()->attach($productId, [
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            // Reduce product stock
            $product = Product::find($productId);
            if ($product) {
                $product->decrement('stock', $item['quantity']);
            }
        }

        session()->forget('cart');
        return back()->with('success', 'Purchase completed successfully!');
    }
}