<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/9/ITP1_9_D

// Transformation
// Get Args.

$str = rtrim(fgets(STDIN));
$Q = rtrim(fgets(STDIN));

for ($i = 0; $i < $Q; $i++) {
    $line = explode(" ", rtrim(fgets(STDIN)));
    $order = $line[0];
    $a = $line[1];
    $b = $line[2];
    $vol = $b - $a + 1;

    if ($order == "replace") {
        $q = $line[3];
        $str = substr_replace($str, $q, $a, $vol);
    } elseif ($order == "reverse") {
        $str_part = strrev(substr($str, $a, $vol));
        $str = substr_replace($str, $str_part, $a, $vol);
    } elseif ($order == "print") {
        print(substr($str, $a, $vol) . PHP_EOL);
    }
}
