<?php // src/AppBundle/Entity/Collection.php

namespace AppBundle\Base;

use AppBundle\Core\Collector;
use AppBundle\Core\EntityManager;

/**
 * Class Collection
 * @package AppBundle\Base
 */
abstract class Collection extends EntityManager implements Collector
{
    /**
     * @var array $items
     */
    private $items;

    /**
     * @param $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }
}
