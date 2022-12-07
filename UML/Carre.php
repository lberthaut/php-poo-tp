<?php

require_once 'Rectangle.php';

class Carre extends Rectangle{

    public function __construct ($longueur, $largeur, $x, $y){
        parent::__construct($x, $y, $longueur, $largeur);
        $longueur = $largeur;
    }
    
    public function __toString(){
        echo "Carre: ".$this->id."";
    }
}