<?php

namespace App\Listeners;

use App\Enums\SupportStatus;
use App\Events\SupportReplied;
use App\Services\SupportService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChangeStatusSupport
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected SupportService $supportService,
    ) {
    }

    /**
     * Handle the event.
     */
    public function handle(SupportReplied $event): void
    {
        $reply = $event->reply();

        $this->supportService->updateStatus(
            id: $reply->support_id,
            status: SupportStatus::P,
        );
    }
}
