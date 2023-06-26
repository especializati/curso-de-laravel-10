<?php

namespace App\Observers;

use App\Models\Support;
use Illuminate\Support\Facades\Auth;

class SupportObserver
{
    /**
     * Handle the Support "creating" event.
     */
    public function creating(Support $support): void
    {
        $support->user_id = Auth::user()->id;
    }
}
