<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/1/ALDS1/4/ALDS1_4_B
// Search III
// Get Args.
$n = (int)rtrim(fgets(STDIN));

$dictA = $dictC = $dictG = $dictT = array();
for ($i = 0; $i < $n; $i++) {
    list($order, $str) = explode(" ", rtrim(fgets(STDIN)));

    switch ($order) {
        case 'insert':
            switch ($str[0]) {
                case 'A':
                    foreach ($dictA as $val) if ($val == $str) break;
                    $dictA[] = $str;
                    break;
                case 'C':
                    foreach ($dictC as $val) if ($val == $str) break;
                    $dictC[] = $str;
                    break;
                case 'G':
                    foreach ($dictG as $val) if ($val == $str) break;
                    $dictG[] = $str;
                    break;
                case 'T':
                    foreach ($dictT as $val) if ($val == $str) break;
                    $dictT[] = $str;
                    break;
            }
            break;
        case 'find':
            switch ($str[0]) {
                case 'A':
                    print(searchWord($dictA, $str) . "\n");
                    break;
                case 'C':
                    print(searchWord($dictC, $str) . "\n");
                    break;
                case 'G':
                    print(searchWord($dictG, $str) . "\n");
                    break;
                case 'T':
                    print(searchWord($dictT, $str) . "\n");
                    break;
            }
            break;
    }
}

function searchWord($dic, $word)
{
    $result = 'no';
    foreach ($dic as $val) {
        if ($val == $word) {
            $result = "yes";
            break;
        }
    }
    return $result;
}
