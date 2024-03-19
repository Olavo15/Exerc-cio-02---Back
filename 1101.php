<?php
while (true) {
    $input = readline();
    $values = explode(" ", $input);
    $M = (int)$values[0];
    $N = (int)$values[1];

    if ($M <= 0 || $N <= 0) {
        break;
    }

    $start = min($M, $N);
    $end = max($M, $N);

    $sequence = range($start, $end);
    $sequence_str = implode(" ", $sequence);
    $sequence_sum = array_sum($sequence);

    echo $sequence_str . " Sum=" . $sequence_sum . "\n";
}

?>