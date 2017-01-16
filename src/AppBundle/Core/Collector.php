<?php // src/AppBundle/Core/Collector.php

namespace AppBundle\Core;

/**
 * Interface Collector
 * @package AppBundle\Core
 */
interface Collector
{
    /**
     * @param array $items
     * @return mixed
     */
    public function setItems($items);

    /**
     * @param mixed $item
     * @return mixed
     */
    public function addItem($item);

    /**
     * @return mixed
     */
    public function getItems();

    /**
     * @return int
     */
    public function count();
}
