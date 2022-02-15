<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/3/ALDS1_3_A
ini_set("memory_limit", "-1");
// Stack
// Get Args.
$line =  explode(" ", rtrim(fgets(STDIN)));
$array = array();

foreach ($line as $val) {
    // print("val=$val ");
    if (in_array(($val), array('+', '*', '-'))) {
        $a = array_pop($array);
        $b = array_pop($array);
        switch ($val) {
            case '+':
                array_push($array, $b + $a);
                break;
            case '-':
                array_push($array, $b - $a);
                break;
            case '*':
                array_push($array, $b * $a);
                break;
        }
    } else {
        array_push($array, $val);
    }
    // printf("%s\n", implode(" ", $array));
}
print(implode(" ", $array) . PHP_EOL);
