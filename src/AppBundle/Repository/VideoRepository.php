<?php // src/AppBundle/Repository/VideoRepository.php

namespace AppBundle\Repository;

use AppBundle\Base\Repository;
use AppBundle\Entity\Video;

/**
 * Class VideoRepository
 * @package AppBundle\Repository
 */
class VideoRepository extends Repository
{
    /**
     * @param int $videoId
     * @return string
     */
    public function convertVideoLength($videoId)
    {
        /** @var Video $video */
        $video = $this->find('Video')->getById($videoId);

        $length = $video->getLength();

        return gmdate('H:i:s', $length);
    }
}
