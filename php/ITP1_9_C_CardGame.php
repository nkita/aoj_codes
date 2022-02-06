<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/9/ITP1_9_C

// Card Game
// Get Args.

$N = rtrim(fgets(STDIN));
$tPoint = 0;
$hPoint = 0;

for ($i = 0; $i < $N; $i++) {
    $line = explode(" ", rtrim(fgets(STDIN)));
    $taro = $line[0];
    $hana = $line[1];

    if ($taro > $hana) {
        $tPoint += 3;
    } elseif ($taro < $hana) {
        $hPoint += 3;
    } else {
        $tPoint++;
        $hPoint++;
    }
}

printf("%s %s" . PHP_EOL, $tPoint, $hPoint);
