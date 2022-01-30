<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/2/ALDS1_2_B

// Selection Sort
// Get Args.
$N = rtrim(fgets(STDIN));
$A = explode(" ", rtrim(fgets(STDIN)));

$i = 0;
$count = 0;
while ($i < $N) {
    for ($j = 0; $j < $N - $i - 1; $j++) {
        // print("j=" . $j . " array =" . implode(" ", $A) . " compare=(" . $A[$j] . ")(" . $A[$j + 1] . ")" . PHP_EOL);

        if ($A[$j] > $A[$j + 1]) {
            $tmp = $A[$j];

            $A[$j] = $A[$j + 1];
            $A[$j + 1] = $tmp;
            $count++;
        }
    }
    $i++;
}

print(implode(" ", $A) . PHP_EOL);
print($count . PHP_EOL);
