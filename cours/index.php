<?php
class Vehicule
{

}

class Camion extends Vehicule 
{ 
  
}

class Voiture extends Vehicule
{
    const NB_ROUES = 4;

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
      return 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
      self::NB_ROUES.' roues';
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

$mercedes = new Voiture();

var_dump([Voiture::NB_ROUES, $mercedes->rouler()]);