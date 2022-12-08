<?php

namespace Interfaces;
interface TravailleurInterface{
    const minHrTravailleStagiaire = 5;
    const maxHrTravailleStagiaire = 7;
    const minHrTravailleEmploye = 6;
    const maxHrTravailleEmploye = 9;
    
    public function getId();

    public function travailler():int;
}