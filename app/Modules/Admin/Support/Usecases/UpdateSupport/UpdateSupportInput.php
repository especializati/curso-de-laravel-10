<?php

namespace App\Modules\Admin\Support\Usecases\UpdateSupport;

class UpdateSupportInput
{
    public function __construct(
        public readonly int $id,
        public readonly string $subject,
        public readonly string $status,
        public readonly string $body,
    ) {}
}