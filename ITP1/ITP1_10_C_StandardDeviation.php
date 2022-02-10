<?php
// https://onlinejudge.u-aizu.ac.jp/problems/ITP1_10_C

// Distance
// Get Args.
while (true) {
    $n = rtrim(fgets(STDIN));
    if ($n == 0) break;
    $s = explode(" ", rtrim(fgets(STDIN)));
    $m = array_sum($s) / count($s);
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum = $sum + pow(($s[$i] - $m), 2);
    }
    print(sqrt($sum / $n) . PHP_EOL);
}
