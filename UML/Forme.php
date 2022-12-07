<?php

require_once 'Point2D';

abstract class Forme{

    protected $id = 0;
    static public $compteur = 0;
    protected Point2D $centre;

    public function __construct ($id, $compteur){
        $this->id = ++self::$compteur;
    }

    abstract public function perimetre();

    abstract public function surface();

    public function bouger($dx, $dy){

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCompteur()
    {
        return $this->compteur;
    }

    public function setCompteur($compteur): self
    {
        $this->compteur = $compteur;

        return $this;
    }
}