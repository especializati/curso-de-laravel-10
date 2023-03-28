<?php

namespace App\Modules\Admin\Support\Providers;

use App\Modules\Admin\Support\Repositories\SupportRepositoryEloquent;
use App\Modules\Admin\Support\Repositories\SupportRepository;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            SupportRepository::class,
            SupportRepositoryEloquent::class
        );

        $this->app->register(RouteServiceProvider::class);
    }
}
