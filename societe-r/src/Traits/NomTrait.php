<?php

declare(strict_types=1);

namespace App\Traits;

trait NomTrait
{
    private $nom;

    /**
     * Get the value of nom.
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom.
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}
