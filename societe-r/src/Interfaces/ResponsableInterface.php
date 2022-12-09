<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Interfaces\EmployeInterface as InterfacesEmployeInterface;

interface ResponsableInterface extends InterfacesEmployeInterface
{
    public function getEquipe();
}
