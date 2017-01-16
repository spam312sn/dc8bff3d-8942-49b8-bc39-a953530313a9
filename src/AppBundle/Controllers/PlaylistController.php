<?php // src/AppBundle/Controllers/PlaylistController.php

namespace AppBundle\Controller;

use AppBundle\Entity\Playlist;
use AppBundle\Entity\Video;

/**
 * Class PlaylistController
 * @package AppBundle\Controller
 */
class PlaylistController
{
    /**
     * Show info about playlist
     * Path: /playlist/{id}
     *
     * @param integer $id Playlist ID
     */
    public function viewAction($id)
    {
        $playListEntity = new Playlist();
        /** @var Playlist $playList */
        $playList = $playListEntity->getById($id);

        echo "Name: " . $playList->getName() . "<br/>";

        echo "Videos: (" . $playList->count() . ") ";
        $videos = $playList->getItems();
        /** @var Video $video */
        foreach ($videos as $video) {
            echo "<a href=\"/video/" . $video->getId() . "\">" . $video->getName() . "</a></br>";
        }
    }

    /**
     * List all the play lists of the user
     * Path: /user/{id}/playlists
     *
     * @var integer $userId User ID
     */
    public function indexAction($userId)
    {
        $playListEntity = new Playlist();
        /** @var array $playLists */
        $playLists = $playListEntity->findBy('user', $userId);

        /** @var Playlist $playList */
        foreach ($playLists as $playList) {
            echo "Name: <a href=\"/playlist/" . $playList->getId() . "\">" . $playList->getName() . "</a><br/>";
            echo "Videos: (" . $playList->count() . ")<br/><hr/>";
        }
    }
}
