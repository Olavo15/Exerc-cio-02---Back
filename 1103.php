<?php


function diferenca_tempo($h1, $m1, $h2, $m2) {

    $total_minutos_1 = $h1 * 60 + $m1;
    $total_minutos_2 = $h2 * 60 + $m2;


    $diferenca = $total_minutos_2 - $total_minutos_1;


    if ($diferenca < 0) {
        $diferenca += 24 * 60;
    }

    return $diferenca;
}


while (true) {
    
    fscanf(STDIN, "%d %d %d %d", $h1, $m1, $h2, $m2);

    
    if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
        break;
    }

    
    $diferenca = diferenca_tempo($h1, $m1, $h2, $m2);

    
    echo $diferenca . PHP_EOL;
}
