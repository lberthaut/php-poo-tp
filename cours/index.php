<?php

class Voiture
{
    private $vitesse = 100;
    private $carburant = 'diesel';

    public function rouler()
    {
        echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h';
    }
}

$mercedes = new Voiture();
$mercedes->rouler();

