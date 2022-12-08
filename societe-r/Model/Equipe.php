<?php

class Equipe implements EquipeInterface
{
    

    use NomTrait;

    private $employes = [];
    private Responsable $responsable;
    public static $nbHeuresTravails = 0;

    public function __construct($nom = null, $employes = [])
    {
        $this->setNom($nom);

        foreach ($employes as $travailleur) {
            $this->addEmploye($travailleur);
        }
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
    public function addEmploye($travailleur)
    {
        if(count($this->employes) <= self::NB_EMPLOYE_MAX) {
            $this->employes[] = $travailleur;
        }

        return $this;
    }
    
    /**
     * Set the value of employes
     *
     * @return  self
     */ 
    public function supressionEmploye(Employe $travailleur)
    {
        $this->equipe = array_filter(
            $this->employes, 
            function(Employe $employeEquipe) use ($travailleur) {
                return $travailleur->getId() !== $employeEquipe->getId();
            }   
        );

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

    /**
     * Get the value of responsable
     */ 
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set the value of responsable
     *
     * @return  self
     */ 
    public function setResponsable(Responsable $responsable)
    {
        $this->responsable = $responsable;
        $this->responsable->setEquipe($this);

        return $this;
    }
}