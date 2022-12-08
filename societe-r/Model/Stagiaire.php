<?php

require_once 'StagiaireTrait.php';

class Stagiaire extends TravailleurInterface{
    use StagiaireTrait;

    public $stagiaires = [];
    public static $nbHeuresTravails = 0;

    public function __construct($id = null, $nom = null, $prenom = null, $age = null, $stagiaires = []){
        $this->setId($id())
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setAge($age);
    }

    public function travailler(){
        return rand(minHrTravailleStagiaire, maxHrTravailleStagiaire);
    }

    public function getStagiaires()
    {
        return $this->stagiaires;
    }

    public function setStagiaires($stagiaires): self
    {
        $this->stagiaires = $stagiaires;

        return $this;
    }


}