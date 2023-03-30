<?php

namespace App\Modules\Admin\Support\Entity;

final class SupportList
{
    private array $objects;

    public function __construct(Support ...$object) 
    {
        $this->objects = $object;
    }
    
    public function add(Support $object): void
    {
        $this->objects[] = $object;
    }

    public function all(): array
    {
        return $this->objects;
    }
}