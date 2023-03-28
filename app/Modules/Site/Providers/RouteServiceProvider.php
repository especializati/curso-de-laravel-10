<?php

namespace App\Modules\Site\Providers;

use App\Modules\Site\Http\Routes\SiteRoutes;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Site\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        (new SiteRoutes([
            'prefix' => '',
            'middleware' => ['web'],
            'namespace' => $this->namespace,
        ]))->register();
    }
}
