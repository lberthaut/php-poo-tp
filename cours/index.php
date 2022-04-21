<?php

class Voiture
{
    private $vitesse = 100;
    private $carburant = 'diesel';

    public function __construct($vitesse = null, $carburant = null)
    {
      if(null !== $vitesse) {
        $this->vitesse = $vitesse;
      }
      
      $this->setCarburant($carburant);
    }

    public function rouler()
    {
        echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h';
    }

    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function setCarburant($carburant)
    {
        if(in_array($carburant, ['diesel', 'essence', 'ethanol'])) {
            $this->carburant = $carburant;
        }
    }

    public function getCarburant()
    {
        return $this->carburant;
    }
}

  $mercedes = new Voiture();
  $scenic = new Voiture(90, 'ethanol');

  var_dump(compact('scenic', 'mercedes'));

