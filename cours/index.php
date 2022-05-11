<?php

require_once 'PropVitesseTrait.php';
require_once 'VitesseTrait.php';
require_once 'PorteInterface.php';
require_once 'RoulerInterface.php';
require_once 'VehiculeInterface.php';
require_once 'TransportInterface.php';
require_once 'AbstractVehicule.php';
require_once 'Voyageur.php';
require_once 'Vehicule.php';
require_once 'Camion.php';
require_once 'Voiture.php';
require_once 'Avion.php';

$suziki = new Vehicule(120, 'diesel');
$volvoTruck = new Camion(150, 'essence');
$mercedes = new Voiture(90, 'ethanol');

$suziki->rouler();
$volvoTruck->rouler();
$mercedes->rouler();

var_dump(compact('mercedes', 'volvoTruck', 'suziki'));

$dany = new Voyageur('Daniel');
$voiture = new Voiture();
var_dump($dany->voyager($voiture));

$avion = new Avion();
var_dump($dany->voyager($avion));