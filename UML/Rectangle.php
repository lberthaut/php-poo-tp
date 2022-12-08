<?php

require_once 'Forme.php';

class Rectangle extends Forme{
    protected $longueur;
    protected $largeur;

    public function __construct ($longueur = null, $largeur = null, $x, $y){
        parent::__construct($x, $y);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function __toString(){
        echo "Rectangle: ".$this->id.", x: ".$this->longueur.", y: ".$this->largeur."";
    }
    
    public function getLongueur()
    {
        return $this->longueur;
    }
    
    public function setLongueur($longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    public function setLargeur($largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function perimetre() {
        $total = ($this->longueur + $this->largeur)*2;
        echo "Le perimetre est de: " .$total.".";
    }

    public function surface() {
        $total = $this->longueur * $this->largeur;
        echo "la surface est de: " .$total.".";
    }
}