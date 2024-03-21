<?php

$n = intval(trim(fgets(STDIN)));
$tamanho = [];

for ($i = 0; $i < $n; $i++) {
    $palavra = rtrim(fgets(STDIN));
    $tamanho[$i] = strlen($palavra);

    for ($j = 0; $j < $tamanho[$i]; $j++) {
        if ((ord($palavra[$j]) >= 97 && ord($palavra[$j]) <= 122)
            || ((ord($palavra[$j]) >= 65 && ord($palavra[$j]) <= 90))) {
            $palavra[$j] = chr(ord($palavra[$j]) + 3);
        }
    }

    for ($j = 0; $j < intval($tamanho[$i] / 2); $j++) {
        $letra = $palavra[$j];
        $palavra[$j] = $palavra[$tamanho[$i] - $j - 1];
        $palavra[$tamanho[$i] - $j - 1] = $letra;
    }

    for ($j = intval($tamanho[$i] / 2); $j < $tamanho[$i]; $j++) {
        $palavra[$j] = chr(ord($palavra[$j]) - 1);
    }

    echo $palavra . "\n";
}

?>