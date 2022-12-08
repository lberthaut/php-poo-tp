<?php

final class Voiture extends Vehicule implements VehiculeInterface, TransportInterface
{
    public $vitesse = 90; // Error
    public $carburant = 'diesel';


    public static function getNbPortes()
    {
        // TODO: Implement getNbPortes() method.
    }

    public function __construct()
    {
    }

    public function voyager(Voyageur $voyageur) {
        return $voyageur->getNom().' voyage en voiture' ;
    }
}