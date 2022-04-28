<?php

trait VitesseTrait 
{
    use PropVitesseTrait;

    public function setVitesse($vitesse) 
    { 
        $this->vitesse = $vitesse; 
    }
    
    public function getVitesse() 
    { 
        return $this->vitesse; 
    }
}