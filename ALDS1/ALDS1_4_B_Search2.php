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
foreach ($T as $t) if (binarySearch($S, $t)) $count++;
print("$count\n");

// foreach ($T as $t) {
//     // print("\$t = $t \n");
//     $end = $n - 1;
//     $start = 0;
//     $add = floor(($end - $start) / 2);
//     while ($add > 0) {
//         $mod = ($end - $start) % 2;
//         $add = floor(($end - $start) / 2);
//         $index = $start + $add;
//         if ($S[$index] == $t) {
//             $count++;
//             break;
//         }
//         if ($S[$index] > $t) {
//             $end = $index;
//         } else {
//             $start = $index;
//         }
//         if ($add <= 0 && $mod == 1) {
//             if ($S[$index + 1] == $t) $count++;
//             break;
//         }
//     }
// }

function binarySearch($S, $key)
{
    $left = 0;
    $right = count($S);
    while ($left < $right) {
        $mid = ($left + $right) / 2;
        if ($S[$mid] == $key) {
            return $mid;
        } elseif ($key < $S[$mid]) {
            $right = $mid;
        } else {
            $left = $mid + 1;
        }
    }
    return false;
}
