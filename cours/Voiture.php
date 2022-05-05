<?php

final class Voiture implements VehiculeInterface
{
    private $vitesse = 90; // Error
    protected $carburant = 'diesel';
    public function rouler()
    {
        echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
            self::NB_ROUES.' roues';
    }

    public static function getNbPortes()
    {
        // TODO: Implement getNbPortes() method.
    }

    public function __construct()
    {
    }
}