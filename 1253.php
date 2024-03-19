<?php

function decodificar_cifra($mensagem, $deslocamento) {
    $resultado = '';


    $deslocamento_inverso = (26 - $deslocamento) % 26;


    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];


        if (ctype_upper($caractere)) {

            $nova_posicao = ord($caractere) + $deslocamento_inverso;


            if ($nova_posicao > ord('Z')) {
                $nova_posicao -= 26;
            }


            $resultado .= chr($nova_posicao);
        } else {

            $resultado .= $caractere;
        }
    }

    return $resultado;
}


$n = intval(fgets(STDIN));


for ($i = 0; $i < $n; $i++) {

    $mensagem_codificada = trim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));


    $mensagem_decodificada = decodificar_cifra($mensagem_codificada, $deslocamento);


    echo $mensagem_decodificada . PHP_EOL;
}
