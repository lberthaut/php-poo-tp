<?php

class Voiture
{

}

$mercedes = new Voiture();

var_dump($mercedes);

function foo(&$var)
{
    $var = 2;
}

$a = 1;
foo($a);

// $a vaut 2 maintenant
var_dump(compact('a'));

$date1 = new DateTime();
$date2 = $date1;
$date3 = clone $date1;
$date2->modify('+1 day');

var_dump(compact('date1', 'date2', 'date3'));

