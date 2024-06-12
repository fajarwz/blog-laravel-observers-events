<?php

namespace App\Observers;

use App\Models\Purchase;

class PurchaseObserver
{
    /**
     * Handle the Purchase "created" event.
     */
    public function created(Purchase $purchase): void
    {
        // Notify the user about the purchase here

        // Notify the seller about the purchase here

        // You may also want to use Laravel Database Transactions to handle these
        // https://fajarwz.com/blog/laravel-database-transaction-for-data-consistency/

        // Update the product stock
        $product = $purchase->product;
        $product->stock -= $purchase->quantity;
        $product->save();
    }

    /**
     * Handle the Purchase "updated" event.
     */
    public function updated(Purchase $purchase): void
    {
        //
    }

    /**
     * Handle the Purchase "deleted" event.
     */
    public function deleted(Purchase $purchase): void
    {
        //
    }

    /**
     * Handle the Purchase "restored" event.
     */
    public function restored(Purchase $purchase): void
    {
        //
    }

    /**
     * Handle the Purchase "force deleted" event.
     */
    public function forceDeleted(Purchase $purchase): void
    {
        //
    }
}
