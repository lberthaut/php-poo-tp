<?php

final class Responsable extends Employe implements ResponsableInterface, TravailleurInterface
{
    public function faireTravailler(TravailleurInterface $travailleur){
        return $this->travailleur->travailler();
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