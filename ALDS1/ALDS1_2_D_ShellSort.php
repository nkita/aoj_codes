<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/2/ALDS1_2_D
ini_set("memory_limit", "-1");
// Shell Sort
// Get Args.
$n = rtrim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $A[] =  rtrim(fgets(STDIN));
}
$cnt = 0;
$g = $n;
while (true) {
    $val = floor($g / 2);
    if ($val <= 1) {
        $G[] = 1;
        break;
    } else {
        $G[] = $val;
    }
    $g = $val;
}
$A = shellSort($A, $n, $G);

print(count($G) . "\n");
print(implode(' ', $G) . "\n");
print($cnt . "\n");
print(implode("\n", $A) . "\n");

// insertionSort
function insertionSort($A, $n, $g)
{
    global $cnt;
    for ($i = $g; $i < $n; $i++) {
        $v = $A[$i];
        $j = $i - $g;
        while ($j >= 0 && $A[$j] > $v) {
            $A[$j + $g] = $A[$j];
            $j = $j - $g;
            $cnt++;
        }
        $A[$j + $g] = $v;
    }
    return $A;
}

function shellSort($A, $n)
{
    global $G;
    foreach ($G as $g) {
        $A = insertionSort($A, $n, $g);
    }
    return $A;
}
