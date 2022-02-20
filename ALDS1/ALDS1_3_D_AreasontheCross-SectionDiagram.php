<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/3/ALDS1_3_D
ini_set("memory_limit", "-1");
// Areas on the Cross-Section Diagram
// Get Args.
$l =  str_split(rtrim(fgets(STDIN)));
$deep = $puddle = 0;
$prev = "";
$isUp = true;
$tops = array();
foreach ($l as $char) {
    switch ($char) {
        case '\\':
            if ($isUp) {
                // 頂点を取得
                $tops[] = $deep;
                // 過去の頂点をさかのぼって
                foreach ($tops as $key => $top) {
                    if ($key != 0 && $top < $deep) {
                        unset($tops[$key]);
                        $puddle--;
                    }
                }
            }
            $deep--;
            $isUp = false;
            break;
        case '/':
            if (!$isUp) $puddle++;
            $deep++;
            $isUp = true;
            break;
        case '_':
            break;
    }
}
echo $puddle . PHP_EOL;
echo implode(" ", $tops) . PHP_EOL;
