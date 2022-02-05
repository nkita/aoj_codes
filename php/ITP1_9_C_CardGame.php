<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/9/ITP1_9_C

// Card Game
// Get Args.

$N = rtrim(fgets(STDIN));
$tPoint = 0;
$hPoint = 0;

for ($i = 0; $i < $N; $i++) {
    $line = explode(" ", rtrim(fgets(STDIN)));
    $taro = str_split($line[0]);
    $hana = str_split($line[1]);
    $stringCount = (count($taro) > count($hana)) ? count($hana) : count($taro);
    if ($taro == $hana) {
        $tPoint += 1;
        $hPoint += 1;
    } else {
        $breakFlg = false;
        for ($j = 0; $j < $stringCount; $j++) {
            foreach (range('a', 'z') as $char) {
                if ($char == $taro[$j] && $char == $hana[$j]) {
                    continue;
                } else if ($char == $taro[$j]) {
                    $tPoint += 3;
                    $breakFlg = true;
                    break;
                } elseif ($char == $hana[$j]) {
                    $hPoint += 3;
                    $breakFlg = true;
                    break;
                }
            }
            if ($breakFlg) break;
        }
        if (!$breakFlg) {
            if (count($taro) < count($hana)) {
                $tPoint += 3;
            } else {
                $hPoint += 3;
            }
        }
    }
    // printf("%s %s" . PHP_EOL, $hPoint, $tPoint);
}

printf("%s %s" . PHP_EOL, $hPoint, $tPoint);
