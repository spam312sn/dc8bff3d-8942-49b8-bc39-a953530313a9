<?php // src/AppBundle/Entity/Video.php

namespace AppBundle\Entity;

use AppBundle\Base\Collection;
use AppBundle\Base\Entity;

/**
 * Class Video
 * @package AppBundle\Entity
 */
class Video extends Entity
{
    /**
     * Video duration in seconds
     *
     * @var integer $length
     */
    private $length;

    /**
     * @var Collection $genre
     */
    private $genres;

    /**
     * @var string $sourcePath
     */
    private $sourcePath;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param integer $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @param Genre $genre
     * @return Video
     */
    public function addGenre($genre)
    {
        $this->genres->addItem($genre);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param mixed $genres
     * @return Video
     */
    public function setGenres($genres)
    {
        $this->genres->setItems($genres);
        return $this;
    }

    /**
     * @return string
     */
    public function getSourcePath()
    {
        return $this->sourcePath;
    }

    /**
     * @param string $sourcePath
     * @return Video
     */
    public function setSourcePath($sourcePath)
    {
        $this->sourcePath = $sourcePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Video
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
