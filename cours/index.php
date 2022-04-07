<?php

class Voiture
{
    private $vitesse = 100;
    private $carburant = 'diesel';

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
$mercedes->setCarburant('essence');
$mercedes->setVitesse(120);
$mercedes->rouler();

