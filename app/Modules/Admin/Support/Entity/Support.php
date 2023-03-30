<?php

namespace App\Modules\Admin\Support\Entity;

class Support
{
    public function __construct(
        public readonly string $subject,
        public readonly string $status,
        public readonly string $body,
        public readonly int|null $id = null
    ) {}
}