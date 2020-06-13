<?php declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\Repository\InstagramUserRepositoryInterface;
use App\Library\Instagram;

class InstagramUserRepository implements InstagramUserRepositoryInterface
{
    /**
     * @param array $requestData
     *
     * @return void
     */
    public function triggerAction(array $requestData): void
    {
        $connection = new Instagram();
        $connection->login("test", "test");

        var_dump($requestData);die();
    }
}