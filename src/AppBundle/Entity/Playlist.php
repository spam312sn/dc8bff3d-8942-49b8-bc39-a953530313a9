<?php // src/AppBundle/Entity/Playlist.php

namespace AppBundle\Entity;

use AppBundle\Base\Collection;

/**
 * Class Playlist
 * @package AppBundle\Entity
 */
class Playlist extends Collection
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var int $user
     */
    private $user;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Playlist
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Playlist
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        $userEntity = new User();
        return $userEntity->getById($this->user);
    }

    /**
     * @param User $user
     * @return Playlist
     */
    public function setUser($user)
    {
        $this->user = $user->getId();
        return $this;
    }
}
