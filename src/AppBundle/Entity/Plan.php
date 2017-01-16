<?php // src/AppBundle/Entity/Plan.php

namespace AppBundle\Entity;

use AppBundle\Base\Entity;

/**
 * Class Plan
 * @package AppBundle\Entity
 */
class Plan extends Entity
{
    /**
     * @var int $cap
     */
    protected $cap;

    /**
     * @var float $price
     */
    protected $price;

    /**
     * @return int
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * @param int $cap
     */
    public function setCap($cap)
    {
        $this->cap = $cap;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
