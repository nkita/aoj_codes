<?php

function main($scores)
{
    $M = (int)$scores[0];
    $F = (int)$scores[1];
    $R = (int)$scores[2];
    $sumMF = $M + $F;

    if ($M == -1 && $F == -1 && $R == -1) return NULL;
    // score F
    if ($M == -1 || $F == -1 || $sumMF < 30) return 'F';

    // score A
    if ($sumMF >= 80) return 'A';

    // score B
    if ($sumMF >= 65 && $sumMF < 80) return 'B';

    // score C
    if ($sumMF >= 50 && $sumMF < 65) return 'C';

    // score D
    if ($sumMF >= 30 && $sumMF < 50) {
        if ($R >= 50) return 'C';
        return 'D';
    }
    return NULL;
}

$array = array();
while (true) {
    $stdin = fgets(STDIN);
    $array = explode(" ", rtrim($stdin));
    // if($result ==null) main($array) ?? false;
    $result = main($array);
    if ($result == null) break;
    // if (!$result) break;
    print($result . PHP_EOL);
}
