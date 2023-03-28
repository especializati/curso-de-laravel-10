<?php

namespace App\Modules\Admin\Support\Repositories;

use App\Modules\Admin\Support\DTO\CreateSupportDTO;
use App\Modules\Admin\Support\DTO\UpdateSupportDTO;
use stdClass;

interface SupportRepository
{
    public function getAll(string $filter = null): array;
    public function findOne(string $id): stdClass|null;
    public function delete(string $id): void;
    public function new(CreateSupportDTO $dto): stdClass;
    public function update(UpdateSupportDTO $dto): stdClass|null;
}
