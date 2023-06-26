<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SupportService;
use Illuminate\Http\Request;

class ReplySupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {
    }

    public function index(string $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.replies.replies', compact('support'));
    }
}
