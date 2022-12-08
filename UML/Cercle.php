<?php

require_once 'Forme.php';

class Cercle extends Forme{
    private $rayon;

    public function __construct ($rayon = null, $x, $y){
        parent::__construct($x, $y);
        $this->setRayon($rayon);
    }

    public function __toString(){
        echo "Cercle: ".$this->id.", rayon: ".$this->rayon."";
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function setRayon($rayon): self
    {
        $this->rayon = $rayon;
        return $this;
    }

    public function perimetre() {
        $total = 2*$this->rayon*pi();
        echo "Le perimetre est de: " .$total.".";
    }

    public function surface() {
        $total = pi()*pow($this->rayon, 2);
        echo "la surface est de: " .$total.".";
    }
}