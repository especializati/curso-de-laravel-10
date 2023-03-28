<?php

namespace App\Modules\Admin\Support\DTO;

use App\Modules\Admin\Support\Http\Requests\StoreUpdateSupport;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body,
    ) {}

    public static function makeFromRequest(StoreUpdateSupport $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            'a',
            $request->body
        );
    }
}
