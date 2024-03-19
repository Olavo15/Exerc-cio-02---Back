<?php


function mdc($a, $b) {
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}


$casos_teste = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $casos_teste; $i++) {
    
    list($f1, $f2) = explode(" ", trim(fgets(STDIN)));

  
    $mdc = mdc($f1, $f2);

    
    echo "$mdc\n";
}

?>