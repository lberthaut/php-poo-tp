<?php

class Equipe {
    private $nom;
    private $employes = [];

    public function __construct($nom = null, $employes = [])
    {
        $this->setNom($nom)
            ->setEmployes($employes)
        ;
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
    public function setEmployes($employes)
    {
        $this->employes = $employes;

        return $this;
    }
}