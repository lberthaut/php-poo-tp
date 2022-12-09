<?php

declare(strict_types=1);

namespace App\Interfaces;

interface TravailleurInterface
{
    public const minHrTravailleStagiaire = 5;
    public const maxHrTravailleStagiaire = 7;
    public const minHrTravailleEmploye = 6;
    public const maxHrTravailleEmploye = 9;

    public function getId();

    public function travailler(): int;
}
