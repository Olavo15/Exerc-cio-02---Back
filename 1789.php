<?php


function determinarNivelVelocidade($lesmas) {
    $maior_velocidade = 0;

    foreach ($lesmas as $velocidade) {
        if ($velocidade > $maior_velocidade) {
            $maior_velocidade = $velocidade;
        }
    }

    if ($maior_velocidade < 10) {
        return 1;
    } elseif ($maior_velocidade < 20) {
        return 2;
    } else {
        return 3;
    }
}


while (($n = intval(fgets(STDIN))) !== false) {

    $velocidades = explode(' ', fgets(STDIN));
    $velocidades = array_map('intval', $velocidades);


    $nivel = determinarNivelVelocidade($velocidades);


    echo $nivel . PHP_EOL;
}
