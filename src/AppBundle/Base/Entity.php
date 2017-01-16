<?php // src/AppBundle/Base/Entity.php

namespace AppBundle\Base;

use AppBundle\Core\EntityManager;

/**
 * Class Entity
 * @package AppBundle\Base
 */
abstract class Entity extends EntityManager
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
