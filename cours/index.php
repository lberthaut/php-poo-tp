<?php

class Voiture
{
    public $vitesse = 100;
    public $carburant = 'diesel';
}

$mercedes = new Voiture();
var_dump($mercedes);

$mercedes->vitesse = 120;
$mercedes->carburant = 'ethanol';
var_dump($mercedes);

