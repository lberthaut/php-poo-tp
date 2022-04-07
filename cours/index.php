<?php

class Voiture
{
    public $vitesse = 100;
    public $carburant = 'diesel';

    public function rouler()
    {
        echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h';
    }
}

$mercedes = new Voiture();
$mercedes->rouler();

