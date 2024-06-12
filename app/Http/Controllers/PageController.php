<?php

namespace App\Http\Controllers;

use App\Events\VisitorsThresholdReached;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Request $request)
    {
        // Suppose a page reaches 1000 visitors
        // this data can be collected from the page table.
        // You may also want to run this check elsewhere,
        // probably in some kind of middleware
        $visitorCount = 1000;
        $creator = User::first();

        if ($visitorCount >= 1000) {
            VisitorsThresholdReached::dispatch($visitorCount, $creator);
        }

        return 'my page';
    }
}
