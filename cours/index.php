<?php

class Voiture
{
    public static $nbPortes = 5;
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

    public static function ajouterPortes()
    {
      self::$nbPortes++;
      return sprintf("Une voiture avec %d portes", self::$nbPortes);
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

var_dump([Voiture::$nbPortes, Voiture::ajouterPortes()]);