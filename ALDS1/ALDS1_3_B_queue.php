<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/3/ALDS1_3_B
ini_set("memory_limit", "-1");
// Queue
// Get Args.
list($n, $q) =  explode(" ", rtrim(fgets(STDIN)));
$amount = 0;
for ($i = 0; $i < $n; $i++) {
    list($name, $time) =  explode(" ", rtrim(fgets(STDIN)));
    $tasks[$name] = (int)$time;
    $amount += (int)$time;
}
$result_time = 0;
while ($amount - $result_time > 0) {
    $queue = array();
    foreach ($tasks as $key => $time) {
        if ($time > $q) {
            $queue[$key] = $time - $q;
            $result_time += $q;
        } else {
            $result_time += $time;
            print("$key $result_time\n");
        }
    }
    $tasks = $queue;
}
