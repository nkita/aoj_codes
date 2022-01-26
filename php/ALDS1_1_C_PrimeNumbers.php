<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/1/ALDS1_1_C

// Prime Numbers
// Get Args.
$n = (int)rtrim(fgets(STDIN));

$count = 0;
for ($i = 0; $i < $n; $i++) {
    $in = (int)rtrim(fgets(STDIN));

    if (isPrime($in)) {
        $count++;
    }
}

// Print the number of prime numbers.
print($count++ . PHP_EOL);

// Check Prime Number.
function isPrime($num)
{
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;

    // A square root of $num
    $srn = sqrt($num);
    for ($i = 3; $i <= $srn; $i++) {
        if ($num % $i == 0) return false;
    }

    return true;
}
