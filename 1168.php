<?php


function calcular_leds($numero) {
   
    $leds_por_digito = array(
        0 => 6, 
        1 => 2, 
        2 => 5, 
        3 => 5, 
        4 => 4, 
        5 => 5, 
        6 => 6, 
        7 => 3, 
        8 => 7, 
        9 => 6  
    );

    $total_leds = 0;


    for ($i = 0; $i < strlen($numero); $i++) {
        $digito = intval($numero[$i]);

        $total_leds += $leds_por_digito[$digito];
    }

    return $total_leds;
}


$n = intval(fgets(STDIN));


for ($i = 0; $i < $n; $i++) {

    $numero = trim(fgets(STDIN));


    $quantidade_leds = calcular_leds($numero);


    echo $quantidade_leds . " leds\n";
}
