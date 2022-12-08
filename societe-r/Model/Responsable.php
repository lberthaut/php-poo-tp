<?php

namespace Classes;
use Interfaces\ResponsableInterface;
use Interfaces\TravailleurInterface;
use Classes\Employe;
final class Responsable extends Employe implements ResponsableInterface, TravailleurInterface
{
    public function faireTravailler(TravailleurInterface $travailleur){
        return $travailleur->travailler();
    }

    private Equipe $equipe;

    /**
     * Get the value of equipe
     */ 
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     *
     * @return  self
     */ 
    public function setEquipe(Equipe $equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }
}