<?php

class Rectangle extends Forme
{
    protected $largeur;
    protected $longeur;

    public function __construct($x, $y, $longeur, $largeur)
    {
        parent::__construct($x, $y);
        $this->longeur = $longeur;
        $this->largeur = $largeur;
    }

    public function __toString()
    {
        return sprintf(
            "{ Rectangle: %d, Centre: %s, Largeur: %d, Longueur: %d, surface: %d, perimetre: %d }",
            $this->id,
            $this->centre,
            $this->largeur,
            $this->longeur,
            $this->surface(),
            $this->perimetre()
        );
    }

    public function surface()
    {
        return $this->longeur * $this->largeur;
    }

    public function perimetre()
    {
        return 2 * ($this->largeur + $this->longeur);
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @param mixed $largeur
     */
    public function setLargeur($largeur): void
    {
        $this->largeur = $largeur;
    }

    /**
     * @return mixed
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * @param mixed $longeur
     */
    public function setLongeur($longeur): void
    {
        $this->longeur = $longeur;
    }
}