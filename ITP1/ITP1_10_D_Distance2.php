<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/10/ITP1_10_D

// Minkowski Distance
// Get Args.

$n = rtrim(fgets(STDIN));
$x = explode(" ", rtrim(fgets(STDIN)));
$y = explode(" ", rtrim(fgets(STDIN)));
$manhattan = 0;
$euclidean = 0;
$minkowski_p3 = 0;
$chebyshov = array();

for ($i = 0; $i < $n; $i++) {
    $manhattan += abs($x[$i] - $y[$i]);
    $euclidean += pow(abs($x[$i] - $y[$i]), 2);
    $minkowski_p3 += pow(abs($x[$i] - $y[$i]), 3);
    $chebyshov[] = abs($x[$i] - $y[$i]);
}
print($manhattan . PHP_EOL);
print(sqrt($euclidean) . PHP_EOL);
print(pow($minkowski_p3, 1 / 3) . PHP_EOL);
print(max($chebyshov) . PHP_EOL);
