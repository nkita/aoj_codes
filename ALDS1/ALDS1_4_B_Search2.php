<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/4/ALDS1_4_B
ini_set("memory_limit", "-1");
// Areas on the Cross-Section Diagram
// Get Args.
$n = (int)rtrim(fgets(STDIN));
$S = explode(" ", rtrim(fgets(STDIN)));
$q = (int)rtrim(fgets(STDIN));
$T = explode(" ", rtrim(fgets(STDIN)));
$count = 0;

$index = $n;
$mod = $count = 0;
foreach ($T as $t) {
    // 中間インデックス取得
    while ($index > 0) {
        $mod = $index % 2;
        $index = floor($index / 2);
        if ($S[$index] == $t) {
            $count++;
            break;
        }
        if ($S[$index] > $t) {
        }
        if ($mod == 0) {
            print("mod");
        }
    }
}
