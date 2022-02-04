<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/9/ITP1_9_B

// Shuffle
// Get Args.
$result = array();
while (true) {
    $str = rtrim(fgets(STDIN));
    if ($str == "-") break;
    $shuffle = (int)rtrim(fgets(STDIN));

    for ($i = 0; $i < $shuffle; $i++) {
        $num = (int)rtrim(fgets(STDIN));
        $str = substr($str, $num) . substr($str, 0, $num);
    }
    $result[] = $str;
}
foreach ($result as $val) print($val . PHP_EOL);
