<?php

require_once 'Employe.php';
require_once 'Equipe.php';

$employe1 = (new Employe())
    ->setNom("Hamada")
    ->setPrenom("Fahari")
    ->setAge(35)
    ->setAnciennete(12)
;

$employe2 = (new Employe())
    ->setNom("Dupont")
    ->setPrenom("Michel")
    ->setAge(50)
    ->setAnciennete(20)
;

$employe3 = (new Employe())
    ->setNom("Lyse")
    ->setPrenom("Anna")
    ->setAge(20)
    ->setAnciennete(1)
;

$employe1->presentation();
$employe2->presentation();
$employe3->presentation();

$dreamTeam = new Equipe('Dream Team', [$employe1, $employe2, $employe3]);

$employe4 = new Employe('Térieur', 'Alain', 15, 56);
$employe5 = new Employe('Térieur', 'Alex', 75, -1);
$employe6 = new Employe('Verse', 'Alain', 75, -1);

$rocketTeam = new Equipe('Rocket Team', [$employe4, $employe5, $employe6]);

$rocketTeam->travailler(8);
$dreamTeam->travailler(7);

echo '<pre>';
var_dump(['Nombre d\'heure travaillé' => Equipe::getNbHeuresTravails()]);

var_dump([
    'rocketTeam' => $rocketTeam->percent(), 
    'dreamTeam' => $dreamTeam->percent()
]);