<?php

function main($args)
{
    $N = (int)$args[0];
    $X = (int)$args[1];

    $count = 0;
    if ($N === 0 && $X === 0) return -1;
    for ($i = 1; $i <= $N; $i++) {
        for ($j = $i + 1; $j <= $N; $j++) {
            for ($k = $j + 1; $k <= $N; $k++) {
                // print("i=" . $i . ",j=" . $j . ",k=" . $k . PHP_EOL);
                if ($i == $j || $i == $k || $j == $k) {
                    continue;
                } else {
                    if (array_sum(array($i, $j, $k)) == $X) {
                        $count++;
                    }
                }
            }
        }
    }
    // print("count=" . $count . PHP_EOL);
    return $count;
}

while (true) {
    $stdin = fgets(STDIN);
    $result = main(explode(" ", rtrim($stdin)));
    if ($result == -1) break;
    print($result . PHP_EOL);
}
