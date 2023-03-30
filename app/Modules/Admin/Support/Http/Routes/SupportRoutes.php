<?php

namespace App\Modules\Admin\Support\Http\Routes;

use App\Http\Routing\RouteFile;
use App\Modules\Admin\Support\Http\Controllers\SupportController;

class SupportRoutes extends RouteFile
{
    protected function routes()
    {
        $this->router->delete('/{id}', [SupportController::class, 'destroy'])->where('id', '[0-9]+')->name('supports.destroy');
        $this->router->put('/{id}', [SupportController::class, 'update'])->where('id', '[0-9]+')->name('supports.update');
        $this->router->get('/{id}/edit', [SupportController::class, 'edit'])->where('id', '[0-9]+')->name('supports.edit');
        $this->router->get('/create', [SupportController::class, 'create'])->name('supports.create');
        $this->router->get('/{id}', [SupportController::class, 'show'])->where('id', '[0-9]+')->name('supports.show');
        $this->router->post('', [SupportController::class, 'store'])->name('supports.store');
        $this->router->get('', [SupportController::class, 'index'])->name('supports.index');
    }
}
