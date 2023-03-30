<?php

namespace App\Modules\Admin\Support\Usecases\UpdateSupport;

use App\Modules\Admin\Support\Entity\Support;
use App\Modules\Admin\Support\Repositories\SupportRepository;

class UpdateSupport
{
    public function __construct(
        private SupportRepository $repository
    ) {}

    public function handle(UpdateSupportInput $input): int
    {
        // TODO verificação permissão de usuário

        $support = new Support(
            $input->subject,
            $input->status,
            $input->body,
            $input->id
        );

        $id = $this->repository->save($support);

        // TODO adicionar log de usuário

        return $id;
    }
}