<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/8/ITP1_8_C

// Sum of Numbers
// Get Args.
$result = array();
foreach (range('a', 'z') as $char) {
    $result[$char] = 0;
}

while (true) {
    $str =  rtrim(fgets(STDIN));
    if ($str == "") break;
    foreach (str_split($str) as $char) {
        if (ctype_alpha($char)) {
            $result[strtolower($char)]++;
        }
    }
}

foreach ($result as $key => $val) {
    print("$key : $val" . PHP_EOL);
}
