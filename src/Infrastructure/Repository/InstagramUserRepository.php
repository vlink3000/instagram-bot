<?php declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\Repository\InstagramUserRepositoryInterface;
use App\Library\Instagram;
use App\Library\Media\Photo\InstagramPhoto;
use App\Library\Response\Model\Location;

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

        try {
            $connection->login("test", "test");

            $photo = new InstagramPhoto("");
            $connection->timeline->uploadPhoto($photo->getFile(), ['caption' => "My first photo! #hello #firstphoto #me"]);

        } catch (\Exception $exception) {
            echo $exception->getMessage();
            die();
        }
    }
}