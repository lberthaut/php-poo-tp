<?php

class Employe {
    public $id;
    public $nom;
    public $prenom;
    public $age;
    public $anciennete;

    public function presentation()
    {
        echo "#$this->id - Mon nom est $this->nom, mon prenom est $this->prenom,
            j'ai $this->age ans
            je travail depuis $this->anciennete ans.<br />";
    }
}

class Equipe {
    public $nom;
    public $employes = [];
}

$employe1 = new Employe();
$employe1->id = uniqid();
$employe1->nom = "Hamada";
$employe1->prenom = "Fahari";
$employe1->age = 35;
$employe1->anciennete = 12;

$employe2 = new Employe();
$employe2->id = uniqid();
$employe2->nom = "Dupont";
$employe2->prenom = "Michel";
$employe2->age = 50;
$employe2->anciennete = 20;

$employe3 = new Employe();
$employe3->id = uniqid();
$employe3->nom = "Lyse";
$employe3->prenom = "Anna";
$employe3->age = 20;
$employe3->anciennete = 1;

$employe1->presentation();
$employe2->presentation();
$employe3->presentation();

$dreamTeam = new Equipe();
$dreamTeam->nom = 'Dream Team';
$dreamTeam->employes[] = $employe1;
$dreamTeam->employes[] = $employe2;
$dreamTeam->employes[] = $employe3;

echo '<pre>';
var_dump(compact('dreamTeam'));