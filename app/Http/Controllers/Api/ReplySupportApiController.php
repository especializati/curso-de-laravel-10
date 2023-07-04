<?php

namespace App\Http\Controllers\Api;

use App\DTO\Replies\CreateReplyDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReplySupportRequest;
use App\Http\Resources\ReplySupportResource;
use App\Services\ReplySupportService;
use App\Services\SupportService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReplySupportApiController extends Controller
{
    public function __construct(
        protected SupportService $supportService,
        protected ReplySupportService $replyService,
    ) {
    }

    public function getRepliesFromSupport(string $supportId)
    {
        if (!$this->supportService->findOne($supportId)) {
            return response()->json(['message' => 'not_found'], Response::HTTP_NOT_FOUND);
        }

        $replies = $this->replyService->getAllBySupportId($supportId);

        return ReplySupportResource::collection($replies);
    }

    public function createNewReply(StoreReplySupportRequest $request)
    {
        $reply = $this->replyService->createNew(
            CreateReplyDTO::makeFromRequest($request)
        );

        return (new ReplySupportResource($reply))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function destroy(string $id)
    {
        $this->replyService->delete($id);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
