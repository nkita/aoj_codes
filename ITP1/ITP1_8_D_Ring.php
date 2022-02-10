<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/8/ITP1_8_D

// Ring
// Get Args.

$s = rtrim(fgets(STDIN));
$p = rtrim(fgets(STDIN));

$scount = strlen($s);
$result = false;
$arr_s = str_split($s);
for ($i = 0; $i < $scount; $i++) {
    if (strstr(implode("", $arr_s), $p)) {
        $result = true;
        break;
    }
    $tmp = $arr_s[0];
    array_shift($arr_s);
    $arr_s[] = $tmp;
}
print((($result) ? "Yes" : "No") . PHP_EOL);
