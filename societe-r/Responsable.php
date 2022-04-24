<?php

final class Responsable extends Employe
{
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