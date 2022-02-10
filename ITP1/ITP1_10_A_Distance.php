<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/10/ITP1_10_A

// Distance
// Get Args.

$P = explode(" ", rtrim(fgets(STDIN)));
$X = $P[2] - $P[0];
$Y = $P[3] - $P[1];
print(sqrt(pow($X, 2) + pow($Y, 2)) . PHP_EOL);
