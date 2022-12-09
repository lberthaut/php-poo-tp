<?php

declare(strict_types=1);

namespace App;

trait VitesseTrait 
{
    use PropVitesseTrait;

    public function setVitesse(int|float|null $vitesse)
    { 
        
        $this->vitesse = $vitesse; 
    }
    
    public function getVitesse(): int|float|null
    { 
        return $this->vitesse; 
    }
}