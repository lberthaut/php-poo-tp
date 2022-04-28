<?php

require_once 'Traits/NomTrait.php';
require_once 'Interface/EmployeInterface.php';
require_once 'Interface/ResponsableInterface.php';
require_once 'Interface/EquipeInterface.php';
require_once 'Model/Employe.php';
require_once 'Model/Responsable.php';
require_once 'Model/Equipe.php';

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

$responsable1 = new Responsable('Krok', 'Odile', 50, 20);
$dreamTeam = (new Equipe('Dream Team', [$employe1, $employe2, $employe3]))
    ->setResponsable($responsable1);

$employe4 = new Employe('Térieur', 'Alain', 15, 56);
$employe5 = new Employe('Térieur', 'Alex', 75, -1);
$employe6 = new Employe('Verse', 'Alain', 75, -1);

$responsable2 = new Responsable('Zole', 'Camille', 42, 20);
$rocketTeam = (new Equipe('Rocket Team', [$employe4, $employe5, $employe6]))
    ->setResponsable($responsable2);

$rocketTeam->travailler(8);
$dreamTeam->travailler(7);

$rocketTeam->supressionEmploye($employe4);

echo '<pre>';

var_dump(compact('rocketTeam', 'dreamTeam'));
var_dump(['Nombre d\'heure travaillé' => Equipe::getNbHeuresTravails()]);

var_dump([
    'rocketTeam' => $rocketTeam->percent(), 
    'dreamTeam' => $dreamTeam->percent()
]);