<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/3/ALDS1_3_C
ini_set("memory_limit", "-1");
// Doubly Linked List
// Get Args.
$n =  rtrim(fgets(STDIN));
$amount = 0;
$result = new SplDoublyLinkedList();

for ($i = 0; $i < $n; $i++) {
    $command =  explode(" ", rtrim(fgets(STDIN)));
    switch ($command[0]) {
        case 'insert':
            $result->unshift($command[1]);
            break;
        case 'delete':
            for ($result->rewind(); $result->valid(); $result->next()) {
                if ($result->current() == $command[1]) {
                    $result->offsetUnset($result->key());
                };
            }
            break;
        case 'deleteFirst':
            $result->shift();
            break;
        case 'deleteLast':
            $result->pop();
            break;
    }
}

for ($result->rewind(); $result->valid(); $result->next()) {
    $out[] = $result->current();
}
print(implode(" ", $out).PHP_EOL);
