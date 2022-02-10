<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/8/ITP1_8_A

// Toggling Cases
// Get Args.
$str =  str_split(rtrim(fgets(STDIN)));

foreach ($str as $key => $val) {
    if (ctype_upper($val)) {
        $str[$key] = strtolower($val);
    } elseif (ctype_lower($val)) {
        $str[$key] = strtoupper($val);
    }
}

print(implode("", $str) . PHP_EOL);
