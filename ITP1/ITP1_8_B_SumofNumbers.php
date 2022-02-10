<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/8/ITP1_8_B

// Sum of Numbers
// Get Args.
while (true) {
    $str =  rtrim(fgets(STDIN));

    if ($str == 0) break;
    $sum = 0;
    foreach (str_split($str) as $val) {
        $sum += $val;
    }
    print($sum . PHP_EOL);
}
