<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/2/ALDS1_2_C

// Stable Sort
// Get Args.
$N = rtrim(fgets(STDIN));
$C = explode(" ", rtrim(fgets(STDIN)));


$result = BubbleSort($C, $N);
print(implode(" ", $result) . PHP_EOL);
print(checkStable($result, $C, $N) . PHP_EOL);

$result = SelectionSort($C, $N);
print(implode(" ", $result) . PHP_EOL);
print(checkStable($result, $C, $N) . PHP_EOL);


// Bubble Sort Funtction.
function BubbleSort($C, $N)
{
    while ($N > 1) {
        for ($j = 1; $j < $N; $j++) {
            if (substr($C[$j], 1, 1) < substr($C[$j - 1], 1, 1)) {
                $tmp = $C[$j];
                $C[$j] = $C[$j - 1];
                $C[$j - 1] = $tmp;
            }
        }
        $N--;
    }
    return $C;
}

// Selection Sort Funtction.
function SelectionSort($C, $N)
{
    $i = 0;
    while ($i < $N) {
        $minj = $i;
        for ($j = $i; $j < $N - 1; $j++) {
            if (substr($C[$minj], 1, 1) > substr($C[$j + 1], 1, 1)) {
                $minj = $j + 1;
            }
        }
        if ($minj !== $i) {
            $tmp = $C[$i];
            $C[$i] = $C[$minj];
            $C[$minj] = $tmp;
        }
        $i++;
    }
    return $C;
}

function checkStable($result, $C, $N)
{
    $cards = array();
    foreach ($C as $val) {
        $cards[substr($val, 1, 1)] = $val;
    }

    $scards = array();
    foreach ($result as $val) {
        $scards[substr($val, 1, 1)] = $val;
    }

    foreach ($cards as $key => $val){
        if($cards[$key] !== $scards[$key])
        return "Not stable";
    }
    return "Stable";
}
