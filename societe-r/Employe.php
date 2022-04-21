<?php

class Employe 
{
    private $id;
    private $nom;
    private $prenom;
    private $age = 18;
    private $anciennete = 0;

    public function __construct(
        $nom = null, 
        $prenom = null, 
        $age = null, 
        $anciennete = null
    ) {
        $this->setId(uniqid())
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setAge($age)
            ->setAnciennete($anciennete)
        ;
    }

    public function presentation()
    {
        echo "#$this->id - Mon nom est $this->nom, mon prenom est $this->prenom,
            j'ai $this->age ans
            je travail depuis $this->anciennete ans.<br />";
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $age = $age > 65 ? 65 : $age;
        $age = $age < 18 ? 18 : $age;

        return $this;
    }

    /**
     * Get the value of anciennete
     */ 
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    /**
     * Set the value of anciennete
     *
     * @return  self
     */ 
    public function setAnciennete($anciennete)
    {
        $anciennete = $anciennete > 47 ? 47 : $anciennete;
        $anciennete = $anciennete < 0 ? 0 : $anciennete;
        
        $this->anciennete = $anciennete;

        return $this;
    }
}