<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/2/ALDS1_2_B

// Selection Sort
// Get Args.
$N = rtrim(fgets(STDIN));
$A = explode(" ", rtrim(fgets(STDIN)));

$i = 0;
$count = 0;
while ($i < $N) {
    $minj = $i;
    for ($j = $i; $j < $N - 1; $j++) {
        // print("j:" . $j . " array:[" . implode(" ", $A) . "] compare:\$A[" . ($minj) . "](" . $A[$minj] . ")>\$A[" . ($j + 1) . "](" . $A[$j + 1] . ") minj=(" . $minj . ")" . PHP_EOL);
        if ($A[$minj] > $A[$j + 1]) {
            $minj = $j + 1;
        }
    }
    if ($minj !== $i) {
        $tmp = $A[$i];
        $A[$i] = $A[$minj];
        $A[$minj] = $tmp;
        $count++;
    }
    $i++;
}

print(implode(" ", $A) . PHP_EOL);
print($count . PHP_EOL);
