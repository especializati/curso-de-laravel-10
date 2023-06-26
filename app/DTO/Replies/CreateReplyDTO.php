<?php

namespace App\DTO\Replies;

use App\Http\Requests\StoreReplySupportRequest;

class CreateReplyDTO
{
    public function __construct(
        public string $supportId,
        public string $content,
    ) {
    }

    public static function makeFromRequest(StoreReplySupportRequest $request): self
    {
        return new self(
            $request->support_id,
            $request->content
        );
    }
}
