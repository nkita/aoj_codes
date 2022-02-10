<?php
$array = array();
while (true) {
    $stdin = fgets(STDIN);
    $array = explode(" ", rtrim($stdin));
    $M = (int)$array[0];
    $F = (int)$array[1];
    $R = (int)$array[2];
    $sumMF = $M + $F;
    if ($M == -1 && $F == -1 && $R == -1) break;
    if ($M == -1 || $F == -1 || $sumMF < 30) {
        echo "F\n";
    } else if ($sumMF >= 80) {
        echo "A\n";
    } else  if ($sumMF >= 65) {
        echo "B\n";
    } else if ($sumMF >= 50) {
        echo "C\n";
    } else   if ($sumMF >= 30) {
        if ($R >= 50) {
            echo "C\n";
        } else {
            echo "D\n";
        }
    }
}
