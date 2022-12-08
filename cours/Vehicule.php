<?php

class Vehicule extends AbstractVehicule implements VehiculeInterface
{
    private $dimensions = 900;
    public $carburant = 'diesel';
    protected static $nbPortes = 5;

    public function __construct($vitesse = null, $carburant = null)
    {
        if(null !== $vitesse) {
            $this->vitesse = $vitesse;
        }
        
        $this->setCarburant($carburant);
    }

    final public function rouler()
    {
        return 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
        self::NB_ROUES.' roues';
    }

    public static function ajouterPortes()
    {
        self::$nbPortes++;
        return sprintf("Une voiture avec %d portes", self::$nbPortes);
    }

    public static function getNbPortes() 
    {
        return self::$nbPortes;
    }

    public function setCarburant($carburant)
    {
      if(!in_array($carburant, ['diesel', 'essence', 'ethanol'])) {
        throw new \Exception("La voiture ne supporte pas le carburant ".$carburant, 1);
      }
      $this->carburant = $carburant;
    }

    public function getCarburant()
    {
        return $this->carburant;
    }
}