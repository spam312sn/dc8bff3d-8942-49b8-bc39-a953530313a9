<?php // src/AppBundle/Core/EntityManager.php

namespace AppBundle\Core;

/**
 * Class EntityManager
 * @package AppBundle\Core
 */
abstract class EntityManager implements Finder
{
    /**
     * @var string $entity
     */
    public $entity;

    /**
     * @param $entity
     * @return $this
     */
    public function find($entity)
    {
        // TODO
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function getById($id)
    {
        // TODO
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        // TODO
    }

    public function findBy($field, $value){
        // TODO
    }
}
