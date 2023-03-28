<?php

namespace App\Modules\Admin\Support\Providers;

use App\Modules\Admin\Support\Http\Routes\SupportRoutes;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Admin\Support\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        (new SupportRoutes([
            'prefix' => '/supports',
            'middleware' => ['web'],
            'namespace' => $this->namespace,
        ]))->register();
    }
}
