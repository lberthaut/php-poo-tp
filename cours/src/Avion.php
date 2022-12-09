<?php

declare(strict_types=1);

namespace App;


class Avion implements TransportInterface {
    public function voyager(Voyageur $voyageur) {
        return $voyageur->getNom().' voyage en avion' ;
    }
}