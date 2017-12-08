<?php

namespace App\Providers;

use App\Image;
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
        $path = substr(str_replace(public_path(), "", $event->path()),1);
        $path = str_replace('\\','/',$path);
        $images = Image::where('url',$path)->get();
        foreach ($images as $image){
            $image->delete();
        }
    }
}
