<?php

declare(strict_types=1);

namespace App;

interface TransportInterface {
  public function voyager(Voyageur $voyageur);
}