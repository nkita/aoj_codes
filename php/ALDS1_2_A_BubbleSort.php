<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/2/ALDS1_2_A

// Bubble Sort
// Get Args.
$N = rtrim(fgets(STDIN));
$A = explode(" ", rtrim(fgets(STDIN)));

$count = 0;
while ($N > 1) {
    for ($j = 1; $j < $N; $j++) {
        if ($A[$j] < $A[$j - 1]) {
            // print("before=" . implode(" ", $A) . PHP_EOL);
            $tmp = $A[$j];

            $A[$j] = $A[$j - 1];
            $A[$j - 1] = $tmp;
            // print("after =" . implode(" ", $A) . PHP_EOL);
            $count++;
        }
    }
    $N--;
}

print(implode(" ", $A) . PHP_EOL);
print($count . PHP_EOL);
