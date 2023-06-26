<?php

namespace App\Services;

use App\DTO\Replies\CreateReplyDTO;
use stdClass;

class ReplySupportService
{
    public function getAllBySupportId(string $supportId): array
    {
        return [];
    }

    public function createNew(CreateReplyDTO $dto): stdClass
    {
        throw new \Exception('not implemented');
    }
}
