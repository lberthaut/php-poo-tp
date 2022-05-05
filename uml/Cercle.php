<?php

class Cercle extends Forme
{
    private $rayon;

    public function __construct($x, $y, $rayon)
    {
        parent::__construct($x, $y);
        $this->setRayon($rayon);
    }

    public function __toString()
    {
        return sprintf(
            "{ Cercle: %d, Centre: %s, Rayon: %d, surface: %d, perimetre: %d }",
            $this->id,
            $this->centre,
            $this->rayon,
            $this->surface(),
            $this->perimetre()
        );
    }

    public function surface()
    {
        return pi() * sqrt($this->rayon);
    }

    public function perimetre()
    {
        return 2 * pi() * $this->rayon;
    }

    /**
     * @return mixed
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * @param mixed $rayon
     */
    public function setRayon($rayon): void
    {
        $this->rayon = $rayon;
    }
}