<?php

namespace App\Application\Controller;

use App\Application\Validator\RequestValidator;
use App\Infrastructure\Repository\InstagramUserRepository;
use Symfony\Component\HttpFoundation\Request;

class ApiController
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function triggerAction(Request $request): void
    {
        $validator = new RequestValidator();
        $validatedRequest = $validator->validateRequestData($request);

        $this->getRepository()->triggerAction($validatedRequest);
    }

    public function getLogs()
    {
        echo json_encode(['logs' => ["user-action-logger" => null]]);
    }

    public function healthCheck()
    {
        echo json_encode(['status' => 'up']);
    }

    private function getRepository(): InstagramUserRepository
    {
        return new InstagramUserRepository();
    }
}