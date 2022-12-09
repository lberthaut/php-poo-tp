<?php

declare(strict_types=1);

use App\Classes\Employe as ClassesEmploye;
use App\Classes\Equipe as ClassesEquipe;
use App\Classes\Responsable as ClassesResponsable;
use App\Exceptions\RExceptions as ExceptionsRExceptions;

require_once '../vendor/autoload.php';

try {
    $testequipe = new ClassesEquipe();

    $travailleur1 = (new ClassesEmploye())
        ->setNom('Hamada')
        ->setPrenom('Fahari')
        ->setAge(35)
        ->setAnciennete(12)
    ;

    $travailleur2 = (new ClassesEmploye())
        ->setNom('Dupont')
        ->setPrenom('Michel')
        ->setAge(50)
        ->setAnciennete(20)
    ;

    $travailleur3 = (new ClassesEmploye())
        ->setNom('Lyse')
        ->setPrenom('Anna')
        ->setAge(20)
        ->setAnciennete(1)
    ;

    $responsable1 = new ClassesResponsable('Krok', 'Odile', 50, 20);
    $dreamTeam = (new ClassesEquipe('Dream Team', [$travailleur1, $travailleur2, $travailleur3]))
        ->setResponsable($responsable1);

    $travailleur4 = new ClassesEmploye('Térieur', 'Alain', 15, 56);
    $travailleur5 = new ClassesEmploye('Térieur', 'Alex', 75, -1);
    $travailleur6 = new ClassesEmploye('Verse', 'Alain', 75, 63);

    $responsable2 = new ClassesResponsable('Zole', 'Camille', 42, 20);
    $rocketTeam = (new ClassesEquipe('Rocket Team', [$travailleur4, $travailleur5, $travailleur6]))
        ->setResponsable($responsable2);
} catch (ExceptionsRExceptions $e) {
    echo 'Message d\'erreur : '.$e->getMessage();
    echo 'Ligne d\'erreur : '.$e->getLine();
    echo $e->getFile();
}

$rocketTeam->travailler(8);
$dreamTeam->travailler(7);

$rocketTeam->supressionEmploye($travailleur4);

echo '<pre>';

var_dump(compact('rocketTeam', 'dreamTeam'));
var_dump(['Nombre d\'heure travaillé' => ClassesEquipe::getNbHeuresTravails()]);

var_dump([
    'rocketTeam' => $rocketTeam->percent(),
    'dreamTeam' => $dreamTeam->percent(),
]);
