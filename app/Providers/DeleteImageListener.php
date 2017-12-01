<?php

namespace App\Providers;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Unisharp\Laravelfilemanager\Events\ImageIsDeleting;

class DeleteImageListener
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
     * @param  ImageIsDeleting  $event
     * @return void
     */
    public function handle(ImageIsDeleting $event)
    {
        //
    }
}
