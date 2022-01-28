<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/1/ALDS1_1_D

// Maximum Profit
// Get Args.
$n = (int)rtrim(fgets(STDIN));

$array = array();
$maximum_number = null;
$min = null;
for ($i = 0; $i < $n; $i++) {
    $in = (int)rtrim(fgets(STDIN));
    if (!is_null($min)) {
        $diff = $in - $min;
        $min = $in < $min ? $in : $min;

        if ($maximum_number === null) {
            $maximum_number = $diff;
        } else {
            $maximum_number =  $diff > $maximum_number ? $diff : $maximum_number;
        }
        // printf("maximum_number=$maximum_number" . PHP_EOL);
    } else {
        $min = $in;
    }
}
// Print the number of Maximum Profit.
print($maximum_number . PHP_EOL);
