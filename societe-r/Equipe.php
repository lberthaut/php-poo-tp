<?php

class Equipe 
{
    const NB_EMPLOYE_MAX = 5;

    private $nom;
    private $employes = [];
    public static $nbHeuresTravails = 0;

    public function __construct($nom = null, $employes = [])
    {
        $this->setNom($nom);

        foreach ($employes as $employe) {
            $this->addEmploye($employe);
        }
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of employes
     */ 
    public function getEmployes()
    {
        return $this->employes;
    }

    /**
     * Set the value of employes
     *
     * @return  self
     */ 
    public function addEmploye($employe)
    {
        if(count($this->employes) <= self::NB_EMPLOYE_MAX) {
            $this->employes[] = $employe;
        }

        return $this;
    }

    public function travailler($nbHeures)
    {
        return self::$nbHeuresTravails += count($this->getEmployes()) * $nbHeures;
    }

    public function percent() 
    {
        return count($this->getEmployes()) / self::NB_EMPLOYE_MAX * 100;
    }

    /**
     * Get the value of nbHeuresTravails
     */ 
    public static function getNbHeuresTravails()
    {
        return self::$nbHeuresTravails;
    }
}