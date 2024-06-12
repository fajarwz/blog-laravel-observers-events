<?php

namespace App\Listeners;

use App\Events\VisitorsThresholdReached;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class VisitorThresholdSmsListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VisitorsThresholdReached $event): void
    {
        $visitorCount = $event->visitorCount;
        $creator = $event->creator;

        $message = "Hi $creator->name, your content has reached $visitorCount visitors! Keep up the good work.";

        // send the sms notification
        info($message);
    }
}
