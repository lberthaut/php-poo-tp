<?php

declare(strict_types=1);

namespace App\Interfaces;

interface EquipeInterface
{
    public const NB_EMPLOYE_MAX = 5;

    public function getNom();

    public function getEmployes();
}
