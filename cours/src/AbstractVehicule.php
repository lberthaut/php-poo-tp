<?php

declare(strict_types=1);

namespace App;

abstract class AbstractVehicule
{
    use VitesseTrait;

    private $dimensions;
    protected $carburant;

    abstract public function rouler();
    
    public function getDimensions() 
    {
      return $this->dimensions;
    }
}