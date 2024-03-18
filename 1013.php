<?php

function maior($a, $b) {
    return ($a + $b + abs($a - $b)) / 2;
}


function maior_entre_tres($a, $b, $c) {
    return maior(maior($a, $b), $c);
}


$input = readline("Digite três valores inteiros separados por espaço: ");
list($a, $b, $c) = explode(' ', $input);
$a = intval($a);
$b = intval($b);
$c = intval($c);


$maior_valor = maior_entre_tres($a, $b, $c);


echo $maior_valor . " eh o maior\n";
?>