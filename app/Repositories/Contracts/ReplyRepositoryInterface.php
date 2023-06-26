<?php

namespace App\Repositories\Contracts;

use App\DTO\Replies\CreateReplyDTO;
use stdClass;

interface ReplyRepositoryInterface
{
    public function getAllBySupportId(string $supportId): array;
    public function createNew(CreateReplyDTO $dto): stdClass;
    public function delete(string $id): bool;
}
