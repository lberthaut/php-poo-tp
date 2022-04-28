<?php

final class Voiture extends Vehicule 
{ 
    public function conduire()
    {
      return 'Bonne conduite à '.$this->vitesse.' Km/h  ...';
    }
}