<?php

namespace App\Modules\Site\Http\Routes;

use App\Http\Routing\RouteFile;
use App\Modules\Site\Http\Controllers\SiteController;

class SiteRoutes extends RouteFile
{
    protected function routes()
    {
        $this->router->get('/contato', [SiteController::class, 'contact']);
    }
}
