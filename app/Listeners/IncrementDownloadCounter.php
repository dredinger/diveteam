<?php

namespace App\Listeners;

use App\Events\DownloadCounter;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncrementDownloadCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DownloadCounter  $event
     * @return void
     */
    public function handle(DownloadCounter $event)
    {
        $event->download->increment('count');
    }
}
