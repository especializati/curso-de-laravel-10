<?php

namespace App\Modules\Admin\Support\Repositories;

use App\Modules\Admin\Support\Entity\Support;

interface SupportRepository
{
    public function getAll(string $filter = null): array;

    public function findOne(int $id): ?Support;

    public function delete(int $id): void;

    public function save(Support $support): int;
}
