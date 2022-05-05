<?php

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