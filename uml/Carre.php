<?php

class Carre extends Rectangle
{
    public function __construct($x, $y, $longeur)
    {
        parent::__construct($x, $y, $longeur, $longeur);
    }

    public function __toString()
    {
        return sprintf(
            "{ Carre: %d, Centre: %s, Largeur: %d, Longueur: %d, surface: %d, perimetre: %d }",
            $this->id,
            $this->centre,
            $this->largeur,
            $this->longeur,
            $this->surface(),
            $this->perimetre()
        );
    }
}