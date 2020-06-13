<?php declare(strict_types=1);

namespace App\Application\Helpers\Router\Routes;

use App\Application\Controller\ApiController;
use Symfony\Component\HttpFoundation\Request;

class ApiRoutes
{
    public function handleRoute(Request $request)
    {
        $apiController = new ApiController();

        switch ($request->getPathInfo()) {
            case '/api/v1/trigger':
                $apiController->triggerAction($request);
                break;
            case '/api/v1/logs':
                $apiController->getLogs();
                break;
            case '/api/v1/health':
                $apiController->healthCheck();
                break;
            default:
                break;
        }
    }
}