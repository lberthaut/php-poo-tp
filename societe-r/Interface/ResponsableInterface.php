<?php

namespace Interfaces;
use Interfaces\EmployeInterface as InterfacesEmployeInterface;

interface ResponsableInterface extends InterfacesEmployeInterface
{
    public function getEquipe();
} 