<?php // src/AppBundle/Controllers/PlanController.php

namespace AppBundle\Controller;

use AppBundle\Entity\Plan;

/**
 * Class PlanController
 * @package AppBundle\Controller
 */
class PlanController
{
    /**
     * List all the subscription plans
     * Path: /plans
     */
    public function listAction()
    {
        $planEntity = new Plan();
        /** @var array $plans */
        $plans = $planEntity->getAll();
        echo "Plans: <br/>";
        /** @var Plan $plan */
        foreach ($plans as $plan) {
            echo $plan->getName() . " " . $plan->getPrice() . "/month for " . $plan->getCap() . " views<br/>";
        }

    }
}
