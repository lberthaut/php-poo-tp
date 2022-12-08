<?php

require_once 'Traits/NomTrait.php';
require_once 'Interface/EmployeInterface.php';
require_once 'Interface/ResponsableInterface.php';
require_once 'Interface/EquipeInterface.php';
require_once 'TravailleurInterface.php';
require_once 'Model/Employe.php';
require_once 'Model/Responsable.php';
require_once 'Model/Equipe.php';


$travailleur1 = (new Employe())
    ->setNom("Hamada")
    ->setPrenom("Fahari")
    ->setAge(35)
    ->setAnciennete(12)
;

$travailleur2 = (new Employe())
    ->setNom("Dupont")
    ->setPrenom("Michel")
    ->setAge(50)
    ->setAnciennete(20)
;

$travailleur3 = (new Employe())
    ->setNom("Lyse")
    ->setPrenom("Anna")
    ->setAge(20)
    ->setAnciennete(1)
;

$responsable1 = new Responsable('Krok', 'Odile', 50, 20);
$dreamTeam = (new Equipe('Dream Team', [$travailleur1, $travailleur2, $travailleur3]))
    ->setResponsable($responsable1);

$travailleur4 = new Employe('Térieur', 'Alain', 15, 56);
$travailleur5 = new Employe('Térieur', 'Alex', 75, -1);
$travailleur6 = new Employe('Verse', 'Alain', 75, -1);

$responsable2 = new Responsable('Zole', 'Camille', 42, 20);
$rocketTeam = (new Equipe('Rocket Team', [$travailleur4, $travailleur5, $travailleur6]))
    ->setResponsable($responsable2);

$rocketTeam->travailler(8);
$dreamTeam->travailler(7);

$rocketTeam->supressionEmploye($travailleur4);

echo '<pre>';

var_dump(compact('rocketTeam', 'dreamTeam'));
var_dump(['Nombre d\'heure travaillé' => Equipe::getNbHeuresTravails()]);

var_dump([
    'rocketTeam' => $rocketTeam->percent(), 
    'dreamTeam' => $dreamTeam->percent()
]);