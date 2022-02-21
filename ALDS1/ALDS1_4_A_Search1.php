<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/4/ALDS1_4_A
ini_set("memory_limit", "-1");
// Areas on the Cross-Section Diagram
// Get Args.
$n = (int)rtrim(fgets(STDIN));
$S = explode(" ", rtrim(fgets(STDIN)));
$q = (int)rtrim(fgets(STDIN));
$T = explode(" ", rtrim(fgets(STDIN)));
$count = 0;
foreach ($S as $s) {
    foreach ($T as $key => $t) {
        if ($t === $s) {
            unset($T[$key]);
            $count++;
        }
    }
}
echo $count . PHP_EOL;
