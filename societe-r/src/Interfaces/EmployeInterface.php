<?php

declare(strict_types=1);

namespace App\Interfaces;

interface EmployeInterface
{
    public const AGE_MIN = 18;
    public const AGE_MAX = 65;
    public const ANCIENNETE_MIN = 0;
    public const ANCIENNETE_MAX = 47;

    public function presentation();

    public function getId();

    public function getNom();

    public function getPrenom();

    public function getAge();

    public function getAnciennete();
}
