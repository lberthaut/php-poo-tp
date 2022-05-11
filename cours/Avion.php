<?php

class Avion implements TransportInterface {
    public function voyager(Voyageur $voyageur) {
        return $voyageur->getNom().' voyage en avion' ;
    }
}