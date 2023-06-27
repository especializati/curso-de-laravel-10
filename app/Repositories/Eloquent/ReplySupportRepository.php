<?php

namespace App\Repositories\Eloquent;

use App\DTO\Replies\CreateReplyDTO;
use App\Models\ReplySupport as Model;
use App\Repositories\Contracts\ReplyRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use stdClass;

class ReplySupportRepository implements ReplyRepositoryInterface
{
    public function __construct(
        protected Model $model,
    ) {
    }

    public function getAllBySupportId(string $supportId): array
    {
        $replies = $this->model
            ->with(['user', 'support'])
            ->where('support_id', $supportId)->get();

        return $replies->toArray();
    }

    public function createNew(CreateReplyDTO $dto): stdClass
    {
        $reply = $this->model->with('user')->create([
            'content' => $dto->content,
            'support_id' => $dto->supportId,
            // 'user_id' => auth()::user()->id,
            'user_id' => Auth::user()->id,
        ]);
        $reply = $reply->with('user')->first();

        return (object) $reply->toArray();
    }

    public function delete(string $id): bool
    {
        if (!$reply = $this->model->find($id)) {
            return false;
        }

        if (Gate::denies('owner', $reply->user->id)) {
            abort(403, 'Not Authorized');
        }

        return (bool) $reply->delete();
    }
}
