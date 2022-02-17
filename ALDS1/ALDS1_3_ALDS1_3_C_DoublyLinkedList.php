<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/3/ALDS1_3_C
ini_set("memory_limit", "-1");
// Doubly Linked List
// Get Args.
$n =  rtrim(fgets(STDIN));
$amount = 0;
$result = array();
for ($i = 0; $i < $n; $i++) {
    $command =  explode(" ", rtrim(fgets(STDIN)));
    switch ($command[0]) {
        case 'insert':
            array_unshift($result, $command[1]);
            break;
        case 'delete':
            foreach ($result as $key => $val) {
                if ($command[1] == $val) {
                    unset($result[$key]);
                    break;
                }
            }
            break;
        case 'deleteFirst':
            array_shift($result);
            break;
        case 'deleteLast':
            array_pop($result);
            break;
    }
}
print(implode(' ', $result) . PHP_EOL);
