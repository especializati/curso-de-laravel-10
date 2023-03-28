<?php

namespace App\Modules\Admin\Support\DTO;

use App\Modules\Admin\Support\Http\Requests\StoreUpdateSupport;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    ) {}

    public static function makeFromRequest(StoreUpdateSupport $request): self
    {
        return new self(
            $request->subject,
            'a',
            $request->body
        );
    }
}
