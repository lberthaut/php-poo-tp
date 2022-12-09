<?php

declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\ResponsableInterface;
use App\Interfaces\TravailleurInterface;

final class Responsable extends Employe implements ResponsableInterface, TravailleurInterface
{
    public function faireTravailler(TravailleurInterface $travailleur)
    {
        return $travailleur->travailler();
    }

    private Equipe $equipe;

    /**
     * Get the value of equipe.
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe.
     *
     * @return self
     */
    public function setEquipe(Equipe $equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }
}
