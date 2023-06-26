<?php

namespace App\Services;

use App\DTO\Replies\CreateReplyDTO;
use App\Repositories\Contracts\ReplyRepositoryInterface;
use stdClass;

class ReplySupportService
{
    public function __construct(
        protected ReplyRepositoryInterface $repository,
    ) {
    }

    public function getAllBySupportId(string $supportId): array
    {
        return $this->repository->getAllBySupportId($supportId);
    }

    public function createNew(CreateReplyDTO $dto): stdClass
    {
        return $this->repository->createNew($dto);
    }
}
