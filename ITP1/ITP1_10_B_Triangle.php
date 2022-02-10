<?php
// https://onlinejudge.u-aizu.ac.jp/problems/ITP1_10_B

// Triangle
// Get Args.

$P = explode(" ", rtrim(fgets(STDIN)));
$a = $P[0];
$b = $P[1];
$C = $P[2];
$S = ($a * $b * sin(deg2rad($C))) / 2;
$c = sqrt(pow($a, 2) + pow($b, 2) - 2 * $a * $b * cos(deg2rad($C)));

print($S . PHP_EOL);
print($a + $b + $c . PHP_EOL);
print($b * sin(deg2rad($C)) . PHP_EOL);