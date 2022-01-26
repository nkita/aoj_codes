<?php

$RC = explode(" ", rtrim(fgets(STDIN)));
$R = (int)$RC[0];
$C = (int)$RC[1];
$line = array();
for ($i = 0; $i < $R; $i++) {
    $arr = explode(" ", rtrim(fgets(STDIN)));
    $arr[] = array_sum($arr);
    $line[] = $arr;
}

$sumline = array();
for ($i = 0; $i <= $C; $i++) {
    $sum = 0;
    foreach ($line as $val) {
        $sum += $val[$i];
    }
    $sumline[$i] = $sum;
}
foreach ($line as $val) {
    print(implode(" ", $val) . PHP_EOL);
}
print(implode(" ", $sumline) . PHP_EOL);
