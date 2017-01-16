<?php // src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use AppBundle\Base\Entity;

/**
 * Class User
 * @package AppBundle\Entity
 */
class User extends Entity
{
    /**
     * @var string $status
     */
    private $status;

    /**
     * @var int $plan
     */
    private $plan;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Plan
     */
    public function getPlan()
    {
        $plan = new Plan();

        return $plan->getById($this->plan);
    }

    /**
     * @param Plan $plan
     * @return User
     */
    public function setPlan($plan)
    {
        $this->plan = $plan->getId();
        return $this;
    }
}
