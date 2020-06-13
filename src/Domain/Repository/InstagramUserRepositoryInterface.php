<?php declare(strict_types=1);

namespace App\Domain\Repository;

interface InstagramUserRepositoryInterface
{
    /**
     * @param array $requestData
     *
     * @return void
     */
    public function triggerAction(array $requestData): void;
}