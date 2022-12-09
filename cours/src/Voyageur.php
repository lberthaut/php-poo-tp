<?php

declare(strict_types=1);

namespace App;

class Voyageur {
  private $nom;
  public function __construct($nom){
      $this->nom = $nom;
  }

  public function getNom(){
      return $this->nom;
  }

  public function voyager(TransportInterface $transport){
      return $transport->voyager($this);
  }
}