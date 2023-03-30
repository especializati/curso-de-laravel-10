<?php

namespace App\Modules\Admin\Support\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Support\Eloquent\SupportRepositoryEloquent;
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
        $supports = $this->repository->getAll($request->filter);

        return view('admin/supports/index', compact('supports'));
    }

    public function show(string $id)
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
        $repository = new SupportRepositoryEloquent();
        $usecase = new CreateSupport($repository);
        $input = new CreateSupportInput($request->subject, 'a', $request->body);
        $usecase->handle($input);

        return redirect()->route('supports.index');
    }

    public function edit(string $id)
    {
        if (!$support = $this->repository->findOne($id)) {
            return back();
        }

        return view('admin/supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request)
    {
        $repository = new SupportRepositoryEloquent();
        $usecase = new UpdateSupport($repository);
        $input = new UpdateSupportInput($request->id, $request->subject, 'a', $request->body);
        $usecase->handle($input);

        return redirect()->route('supports.index');
    }

    public function destroy(string $id)
    {
        $this->repository->delete($id);

        return redirect()->route('supports.index');
    }
}
