<?php

namespace App\Modules\Admin\Support\Repositories;

use App\Modules\Admin\Support\Entity\Support;

interface SupportRepository
{
    public function getAll(string $filter = null): array;

    public function findOne(string $id): ?Support;

    public function delete(string $id): void;

    public function save(Support $support): int;
}
