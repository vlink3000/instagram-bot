<?php

namespace App\Application\Helpers\Router;

use App\Application\Helpers\Router\Routes\ApiRoutes;
use Symfony\Component\HttpFoundation\Request;

class RouteRecognizer
{
    public function recognizeRoute(Request $request): void
    {
        if (strpos($request->getRequestUri(),'api/') !== false) {
            $apiHandler = new ApiRoutes();
            $apiHandler->handleRoute($request);
        }
    }
}