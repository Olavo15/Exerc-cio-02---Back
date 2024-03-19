<?php


function soma_impares($x, $y) {
    
    if ($x > $y) {
        [$x, $y] = [$y, $x];
    }

    
    $soma = 0;

    
    for ($i = $x + 1; $i < $y; $i++) {
    
        if ($i % 2 !== 0) {
    
            $soma += $i;
        }
    }

    return $soma;
}


$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));


$soma = soma_impares($x, $y);


echo $soma . PHP_EOL;
