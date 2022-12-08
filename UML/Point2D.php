<?php
require_once 'Forme.php';

 class Point2D{
    private $x = 0;
    private $y = 0;

    public function __construct ($x, $y){
        $this->setX($x);
        $this->setY($y);
    }


    public function bouger($dx, $dy){
        $this->x + $dx;
        $this->y + $dy;
    }

    public function __toString(){
        echo "Point2D: ".$this->id.", x: ".$this->x.", y: ".$this->y."";
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x): self
    {
        $this->x = $x;
        return $this;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y): self
    {
        $this->y = $y;
        return $this;
    }
}