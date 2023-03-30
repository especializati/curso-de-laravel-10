<?php

namespace App\Modules\Admin\Support\Usecases\CreateSupport;

use App\Modules\Admin\Support\Entity\Support;
use App\Modules\Admin\Support\Repositories\SupportRepository;

class CreateSupport
{
    public function __construct(
        private SupportRepository $repository
    ) {}

    public function handle(CreateSupportInput $input): int
    {
        // TODO verificação permissão de usuário

        $support = new Support(
            $input->subject,
            $input->status,
            $input->body
        );

        $id = $this->repository->save($support);

        // TODO adicionar log de usuário

        return $id;
    }
}