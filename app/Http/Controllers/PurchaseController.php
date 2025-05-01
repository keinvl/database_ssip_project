<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\PurchaseProduct;
use App\Models\Product; // <- Jangan lupa import Product

class PurchaseController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = json_decode($request->cart_data, true);

        $purchase = Purchase::create([
            'user_id' => auth()->id() ?? null,
            'total_price' => 0,
        ]);

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];

            PurchaseProduct::create([
                'purchase_id' => $purchase->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            //reduce stock
            $product = Product::find($item['id']);
            if ($product) {
                $product->decrement('stock', $item['quantity']);
            }
        }

        $purchase->update([
            'total_price' => $total,
        ]);

        return redirect()->route('pages.shop')->with('success', 'Purchase successful!');
    }
}
