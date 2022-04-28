<?php

class Vehicule implements VehiculeInterface
{
    const NB_ROUES = 4;
    use VitesseTrait;

    protected $carburant = 'diesel';
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
        if(in_array($carburant, ['diesel', 'essence', 'ethanol'])) {
            $this->carburant = $carburant;
        }
    }

    public function getCarburant()
    {
        return $this->carburant;
    }
}