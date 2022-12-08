<?php

require 'Autoloader.php';
Autoloader::register();


/* $suziki = new Vehicule(120, 'diesel');
$volvoTruck = new Camion(150, 'essence');
$mercedes = new Voiture(90, 'ethanol');

$suziki->rouler();
$volvoTruck->rouler();
$mercedes->rouler();

var_dump(compact('mercedes', 'volvoTruck', 'suziki')); */

/* $dany = new Voyageur('Daniel');
$voiture = new Voiture();
var_dump($dany->voyager($voiture));
# string(24) "Daniel voyage en voiture"
$avion = new Avion();
var_dump($dany->voyager($avion));

$dany = new Voyageur('Daniel');
$voiture = new Voiture();
var_dump($dany->voyager($voiture));

$avion = new Avion();
var_dump($dany->voyager($avion)); */

try {
    $voiture = new Voiture();
    $voiture->setCarburant('chantilly');
  } catch (\Exception $e) {
    var_dump( 'Message d\'erreur : ' .$e->getMessage());
    var_dump( 'Code d\'erreur : ' .$e->getCode());
    var_dump( $e->getFile());
  }

  $classX = new class extends Avion implements TransportInterface {
    use VitesseTrait;
  };
  $classX->setVitesse(120);
  var_dump($classX);

  $squ = function(float $x){
    return $x**6;
};
var_dump($squ(10));

$mercedes = new Voiture(90, 'ethanol');
$reflection = new \ReflectionClass($mercedes);

var_dump($reflection->getName());
var_dump($reflection->getShortName());
var_dump($reflection->getNamespaceName());
$parent = $reflection->getParentClass();
var_dump($parent->getName());

$interfaces = $reflection->getInterfaceNames();
var_dump($interfaces);
