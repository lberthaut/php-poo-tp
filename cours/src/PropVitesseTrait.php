<?php

declare(strict_types=1);

namespace App;

trait PropVitesseTrait 
{ 
        /**
     * @param int $vitesse Vitesse du véhicule
     * @param string $carburant Carburant du véhicule
     */
    protected $vitesse = 120;
    abstract public function setVitesse($vitesse);
}