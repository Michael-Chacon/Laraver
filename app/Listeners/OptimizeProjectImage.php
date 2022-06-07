<?php

namespace App\Listeners;

use App\Events\projectSaved;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Queue\ShouldQueue;

class OptimizeProjectImage implements ShouldQueue
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
     * @param  \App\Events\projectSaved  $event
     * @return void
     */
    public function handle(projectSaved $event)
    {
        /* Optimizar imagen
        Image::make(storage_path('app/public/images'.  $project->image));
        |*/
        $image = Image::make(Storage::get($event->project->image));
        $image->widen(600)->limitColors(255)->encode();
        Storage::put($event->project->image, (string) $image);
    }
}
