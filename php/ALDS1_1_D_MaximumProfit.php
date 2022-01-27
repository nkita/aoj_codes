<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/1/ALDS1_1_D

// Maximum Profit
// Get Args.
$n = (int)rtrim(fgets(STDIN));

$array = array();
$maximum_number = -99999999999;
for ($i = 0; $i < $n; $i++) {
    $in = (int)rtrim(fgets(STDIN));

    $array[] = $in;
    $num = getMaximumProfit($array);
    $maximum_number = $num >  $maximum_number ? $num : $maximum_number;
    // printf("maximum_number=$maximum_number" . PHP_EOL);
}

// Print the number of Maximum Profit.
print($maximum_number . PHP_EOL);

// Get Maximum Profit.
function getMaximumProfit($array)
{
    $end = array_pop($array);
    $result = -99999999999;
    foreach (array_reverse($array) as $val) {
        $result = ($end - $val) > $result ? ($end - $val) : $result;
        // printf("$end - $val , result = $result "  . PHP_EOL);
    }
    return $result;
}
