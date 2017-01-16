<?php // src/AppBundle/Code/Finder.php

namespace AppBundle\Core;

/**
 * Interface Finder
 * @package AppBundle\Core
 */
interface Finder
{
    /**
     * @param integer $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @return mixed
     */
    public function findBy($field, $value);
}
