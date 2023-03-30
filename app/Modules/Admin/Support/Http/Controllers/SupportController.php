<?php

namespace App\Modules\Admin\Support\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Support\Http\Requests\StoreUpdateSupport;
use App\Modules\Admin\Support\Repositories\SupportRepository;
use App\Modules\Admin\Support\Usecases\CreateSupport\CreateSupport;
use App\Modules\Admin\Support\Usecases\CreateSupport\CreateSupportInput;
use App\Modules\Admin\Support\Usecases\UpdateSupport\UpdateSupport;
use App\Modules\Admin\Support\Usecases\UpdateSupport\UpdateSupportInput;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportRepository $repository
    ) {}

    public function index(Request $request)
    {
        $supports = $this->repository->getAll($request->filter)->all();

        return view('admin/supports/index', compact('supports'));
    }

    public function show(int $id)
    {
        if (!$support = $this->repository->findOne($id)) {
            return back();
        }

        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request)
    {
        $usecase = new CreateSupport($this->repository);
        $input = new CreateSupportInput($request->subject, 'a', $request->body);
        $usecase->handle($input);

        return redirect()->route('supports.index');
    }

    public function edit(int $id)
    {
        if (!$support = $this->repository->findOne($id)) {
            return back();
        }

        return view('admin/supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request)
    {
        $usecase = new UpdateSupport($this->repository);
        $input = new UpdateSupportInput($request->id, $request->subject, 'a', $request->body);
        $usecase->handle($input);

        return redirect()->route('supports.index');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);

        return redirect()->route('supports.index');
    }
}
