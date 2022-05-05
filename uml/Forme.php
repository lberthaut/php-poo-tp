<?php

abstract class Forme
{
    protected $id;
    protected Point2D $centre;
    public static $compteur = 0;

    public function __construct($x, $y)
    {
        $this->id = self::$compteur++;
        $this->centre = new Point2D($x, $y);
    }

    abstract public function surface();
    abstract public function perimetre();

    public function bouger($dx, $dy)
    {
        $this->centre->bouger($dx, $dy);
    }
}