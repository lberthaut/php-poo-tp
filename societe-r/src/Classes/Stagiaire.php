<?php

declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\TravailleurInterface;
use App\Traits\StagiaireTrait;

class Stagiaire extends TravailleurInterface
{
    use StagiaireTrait;

    public $stagiaires = [];
    public static $nbHeuresTravails = 0;

    public function __construct($id = null, $nom = null, $prenom = null, $age = null, $stagiaires = [])
    {
        $this->setId($id())
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setAge($age);
    }

    public function travailler()
    {
        return random_int(5, 7);
    }

    public function getStagiaires()
    {
        return $this->stagiaires;
    }

    public function setStagiaires($stagiaires): self
    {
        $this->stagiaires = $stagiaires;

        return $this;
    }
}
