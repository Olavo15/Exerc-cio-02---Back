<?php


function ordenar_numeros($numeros) {
    $pares = array();
    $impares = array();


    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }


    sort($pares);


    rsort($impares);


    foreach ($pares as $par) {
        echo $par . "\n";
    }
    foreach ($impares as $impar) {
        echo $impar . "\n";
    }
}


$n = intval(fgets(STDIN));

$numeros = array();


for ($i = 0; $i < $n; $i++) {
    $numero = intval(fgets(STDIN));
    $numeros[] = $numero;
}


ordenar_numeros($numeros);
