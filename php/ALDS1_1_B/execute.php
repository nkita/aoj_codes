<?php

$XY = explode(" ", rtrim(fgets(STDIN)));
$X = (int)$XY[0];
$Y = (int)$XY[1];

function gcd($x, $y)
{
    $mod = $x % $y;
    if (!$mod) {
        return $y;
    } else {
        return gcd($y, ($x % $y));
    }
}
if ($X >= $Y) {
    print(gcd($X, $Y) . PHP_EOL);
} else {
    print(gcd($Y, $X) . PHP_EOL);
}
