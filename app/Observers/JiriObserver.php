<?php

namespace App\Observers;

use App\Models\Jiri;
use Illuminate\Support\Facades\Session;

class JiriObserver
{
    /**
     * Handle the Jiri "created" event.
     */
    public function created(Jiri $jiri): void
    {
        Session::flash('jiri-message', __('flash.jiri.created',
            [
                'date' => $jiri->created_at->isoFormat('dddd LL'),
                'time' => $jiri->created_at->isoFormat('HH:mm:ss'),
            ]
        ));
    }

    /**
     * Handle the Jiri "updated" event.
     */
    public function updated(Jiri $jiri): void
    {
        Session::flash('jiri-message', __('flash.jiri.updated',
            [
                'date' => $jiri->updated_at->isoFormat('dddd LL'),
                'time' => $jiri->updated_at->isoFormat('HH:mm:ss'),
            ]
        ));

        //format date according to locale using carbon

    }

    /**
     * Handle the Jiri "deleted" event.
     */
    public function deleted(Jiri $jiri): void
    {
        //
    }

    /**
     * Handle the Jiri "restored" event.
     */
    public function restored(Jiri $jiri): void
    {
        //
    }

    /**
     * Handle the Jiri "force deleted" event.
     */
    public function forceDeleted(Jiri $jiri): void
    {
        //
    }
}
