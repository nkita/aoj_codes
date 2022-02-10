<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/9/ITP1_9_A

// Finding a Word
// Get Args.

$W = rtrim(fgets(STDIN));
$count = 0;
while (true) {
    $line = rtrim(fgets(STDIN));
    if ($line == "END_OF_TEXT") break;
    foreach (explode(" ", $line) as $word) {
        if ($W == strtolower($word)) $count++;
    }
}
print($count . PHP_EOL);
