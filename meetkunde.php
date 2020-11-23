<?php

define('PI', 3.1415);

function berekenOppervlakteCirkel($straal){
    global $functionsExecutedCounter;
    $functionsExecutedCounter++;
    return PI * $straal * $straal;
}

function berekenOppervlakteDriehoek($basis, $hoogte){
    global $functionsExecutedCounter;
    $functionsExecutedCounter++;
    return ($basis * $hoogte) / 2;
}

function berekenOppervlakteRechthoek($zijde1, $zijde2){
    global $functionsExecutedCounter;
    $functionsExecutedCounter++;
    return $zijde1 * $zijde2;
}

function berekenOppervlakteVierkant($zijde){
    global $functionsExecutedCounter;
    $functionsExecutedCounter++;
    return berekenOppervlakteRechthoek($zijde, $zijde);
}

?>
