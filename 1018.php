<?php

function calcularNotas($valor) {
    $notas = array(100, 50, 20, 10, 5, 2, 1);
    $quantidade = array();

    foreach ($notas as $nota) {
        $quantidade[$nota] = intval($valor / $nota);
        $valor %= $nota;
    }

    return $quantidade;
}


$valor = intval(fgets(STDIN));


$quantidade_notas = calcularNotas($valor);


echo $valor . PHP_EOL;


foreach ($quantidade_notas as $nota => $quantidade) {
    echo $quantidade . " nota(s) de R$ " . number_format($nota, 2, ',', '.') . PHP_EOL;
}
