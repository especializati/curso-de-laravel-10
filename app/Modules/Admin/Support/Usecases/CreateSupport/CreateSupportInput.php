<?php

namespace App\Modules\Admin\Support\Usecases\CreateSupport;

class CreateSupportInput
{
    public function __construct(
        public readonly string $subject,
        public readonly string $status,
        public readonly string $body,
    ) {}
}