<?php

namespace App\Modules\Admin\Support\Services;

use App\Modules\Admin\Support\DTO\CreateSupportDTO;
use App\Modules\Admin\Support\DTO\UpdateSupportDTO;
use App\Modules\Admin\Support\Repositories\SupportRepository;
use stdClass;

class SupportService
{
    public function __construct(
        protected SupportRepository $repository,
    ) {}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
}
