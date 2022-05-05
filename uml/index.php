<?php

require_once 'Forme.php';
require_once 'Rectangle.php';
require_once 'Carre.php';
require_once 'Cercle.php';
require_once 'Point2D.php';

$cercle = new Cercle(1, 3, 2);
$rectangle = new Rectangle(2, 3, 3, 2);
$carre = new Carre(4, 6, 3);

echo $cercle, $rectangle, $carre;

echo "\nBouger\n";
$cercle->bouger(2, 1);
$rectangle->bouger(3, 4);
$carre->bouger(1,5);

echo $cercle, $rectangle, $carre;