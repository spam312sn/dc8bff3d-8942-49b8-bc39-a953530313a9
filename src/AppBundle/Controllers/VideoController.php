<?php // src/AppBundle/Controllers/VideoController.php

namespace AppBundle\Controller;

use AppBundle\Entity\Genre;
use AppBundle\Entity\Video;
use AppBundle\Repository\VideoRepository;

/**
 * Class VideoController
 * @package AppBundle\Controller
 */
class VideoController
{
    /**
     * Page with video
     * Path: /video/{id}
     * @param integer $id Video ID
     */
    public function ViewAction($id)
    {
        $videoEntity = new Video();
        /** @var video $video */
        $video = $videoEntity->getById($id);

        echo "Name: " . $video->getName() . "\n";

        echo "Video: ";
        echo "<video width=\"320\" height=\"240\" controls>" .
            "<source src=\"" . $video->getSourcePath() . "\" type=\"" . $video->getType() . "\">" .
            "Your browser does not support HTML5." .
            "</video><br/>";

        $videoRepository = new VideoRepository();
        echo "Duration: " . $videoRepository->convertVideoLength($id) . " <br/>";

        $genres = $video->getGenres();
        echo "Genres: (" . $genres->count() . ")<br/>";
        /** @var Genre $genre */
        foreach ($genres->getItems() as $genre) {
            echo "<a href=\"/search?genre=" . $genre->getId() . "\">" . $genre->getName() . "</a><br/>";
        }

    }
}
