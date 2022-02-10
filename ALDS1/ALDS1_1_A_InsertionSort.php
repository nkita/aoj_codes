<?php

$N = explode(" ", rtrim(fgets(STDIN)));
$A = explode(" ", rtrim(fgets(STDIN)));
for ($i = 0; $i < (int)$N[0]; $i++) {
    $v = $A[$i];
    $j = $i - 1;
    while ($j >= 0 && $A[$j] > $v) {
        $A[$j + 1] = $A[$j];
        $j--;
        $A[$j + 1] = $v;
    }
    print(implode(" ", $A) . PHP_EOL);
}