<?php

namespace App\Providers;

use App\Image;
use App\Putovanja;
use App\Smestaj;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Unisharp\Laravelfilemanager\Events\ImageIsUploading;


class IsUploadingImageListener
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
     * @param  ImageIsUploading  $event
     * @return void
     */
    public function handle(ImageIsUploading $event)
    {
        $path = substr(str_replace(public_path(), "", $event->path()),1);
        $path = str_replace('\\','/',$path);
        if(strpos($path,'putovanje') !== false ){
            $newPath = str_replace('items/putovanje/','',$path);
            $putovanje = Putovanja::where('naziv',explode('/',$newPath)[0])->first();
            $image = new Image(['url' => $path]);
            $putovanje->gallery()->save($image);


        }else if(strpos($path,'smestaj') !== false){
            $newPath = str_replace('items/smestaj/','',$path);
            $putovanje = Smestaj::where('naziv',explode('/',$newPath)[0])->first();
            $image = new Image(['url' => $path]);
            $putovanje->gallery()->save($image);
        }


    }
}
