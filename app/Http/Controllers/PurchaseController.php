<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {
        // Suppose we have a user with id 1 who wants to buy
        // 2 product quantities with id 1
        $userId = 1;
        $quantity = 2;
        $productId = 1;
        $product = Product::find($productId);

        // write the transaction to the purchases table
        $purchase = Purchase::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => $quantity,
            'total_price' => $product->price * $quantity,
        ]);

        return response()->json([
            'purchase' => $purchase->load('product'),
        ], 201);
    }
}
