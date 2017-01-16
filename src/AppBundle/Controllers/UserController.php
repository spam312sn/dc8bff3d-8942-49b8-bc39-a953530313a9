<?php // src/AppBundle/Controllers/UserController.php

namespace AppBundle\Controller;

use AppBundle\Entity\Playlist;
use AppBundle\Entity\User;

/**
 * Class UserController
 * @package AppBundle\Controller
 */
class UserController
{
    /**
     * Info about user
     * Path: /user/{id}
     * @param integer $id User id
     */
    public function viewAction($id)
    {
        $userEntity = new User();
        /** @var User $user */
        $user = $userEntity->getById($id);

        echo "Name: " . $user->getName() . "<br/>";

        $userPlan = $user->getPlan();
        echo "Plan: " . $userPlan->getName() .
            " (" . $userPlan->getPrice() . "/mo for " . $userPlan->getCap() . " views) " .
            "<br/>";

        $playListEntity = new Playlist();
        /** @var mixed $playLists */
        $playLists = $playListEntity->findBy('user', $id);
        echo "Play lists: ";
        /** @var Playlist $playList */
        foreach ($playLists as $playList) {
            echo "<a href=\"/playlist/" . $playList->getId() . "\">" . $playList->getName() . " ( " . $playList->count() . " ) </a><br/>";
        }
        echo "<br/>";
    }
}
